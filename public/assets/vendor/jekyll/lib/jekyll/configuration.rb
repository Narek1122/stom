                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                fig.#{ext}")
        end
        config_files = Jekyll.sanitized_path(source(override), "_config.#{default}")
        @default_config_file = true
      end
      config_files = [config_files] unless config_files.is_a? Array
      config_files
    end

    # Public: Read configuration and return merged Hash
    #
    # file - the path to the YAML file to be read in
    #
    # Returns this configuration, overridden by the values in the file
    def read_config_file(file)
      next_config = safe_load_file(file)
      raise ArgumentError.new("Configuration file: (INVALID) #{file}".yellow) unless next_config.is_a?(Hash)
      Jekyll.logger.info "Configuration file:", file
      next_config
    rescue SystemCallError
      if @default_config_file
        Jekyll.logger.warn "Configuration file:", "none"
        {}
      else
        Jekyll.logger.error "Fatal:", "The configuration file '#{file}' could not be found."
        raise LoadError, "The Configuration file '#{file}' could not be found."
      end
    end

    # Public: Read in a list of configuration files and merge with this hash
    #
    # files - the list of configuration file paths
    #
    # Returns the full configuration, with the defaults overridden by the values in the
    # configuration files
    def read_config_files(files)
      configuration = clone

      begin
        files.each do |config_file|
          new_config = read_config_file(config_file)
          configuration = Utils.deep_merge_hashes(configuration, new_config)
        end
      rescue ArgumentError => err
        Jekyll.logger.warn "WARNING:", "Error reading configuration. " +
                     "Using defaults (and options)."
        $stderr.puts "#{err}"
      end

      configuration.fix_common_issues.backwards_compatibilize
    end

    # Public: Split a CSV string into an array containing its values
    #
    # csv - the string of comma-separated values
    #
    # Returns an array of the values contained in the CSV
    def csv_to_array(csv)
      csv.split(",").map(&:strip)
    end

    # Public: Ensure the proper options are set in the configuration to allow for
    # backwards-compatibility with Jekyll pre-1.0
    #
    # Returns the backwards-compatible configuration
    def backwards_compatibilize
      config = clone
      # Provide backwards-compatibility
      if config.key?('auto') || config.key?('watch')
        Jekyll.logger.warn "Deprecation:", "Auto-regeneration can no longer" +
                            " be set from your configuration file(s). Use the"+
                            " --[no-]watch/-w command-line option instead."
        config.delete('auto')
        config.delete('watch')
      end

      if config.key? 'server'
        Jekyll.logger.warn "Deprecation:", "The 'server' configuration option" +
                            " is no longer accepted. Use the 'jekyll serve'" +
                            " subcommand to serve your site with WEBrick."
        config.delete('server')
      end

      if config.key? 'server_port'
        Jekyll.logger.warn "Deprecation:", "The 'server_port' configuration option" +
                            " has been renamed to 'port'. Please update your config" +
                            " file accordingly."
        # copy but don't overwrite:
        config['port'] = config['server_port'] unless config.key?('port')
        config.delete('server_port')
      end

      if config.key? 'pygments'
        Jekyll.logger.warn "Deprecation:", "The 'pygments' configuration option" +
                            " has been renamed to 'highlighter'. Please update your" +
                            " config file accordingly. The allowed values are 'rouge', " +
                            "'pygments' or null."

        config['highlighter'] = 'pygments' if config['pygments']
        config.delete('pygments')
      end

      %w[include exclude].each do |option|
        if config.fetch(option, []).is_a?(String)
          Jekyll.logger.warn "Deprecation:", "The '#{option}' configuration option" +
            " must now be specified as an array, but you specified" +
            " a string. For now, we've treated the string you provided" +
            " as a list of comma-separated values."
          config[option] = csv_to_array(config[option])
        end
        config[option].map!(&:to_s)
      end

      if (config['kramdown'] || {}).key?('use_coderay')
        Jekyll::Deprecator.deprecation_message "Please change 'use_coderay'" +
          " to 'enable_coderay' in your configuration file."
        config['kramdown']['use_coderay'] = config['kramdown'].delete('enable_coderay')
      end

      if config.fetch('markdown', 'kramdown').to_s.downcase.eql?("maruku")
        Jekyll::Deprecator.deprecation_message "You're using the 'maruku' " +
          "Markdown processor. Maruku support has been deprecated and will " +
          "be removed in 3.0.0. We recommend you switch to Kramdown."
      end
      config
    end

    def fix_common_issues
      config = clone

      if config.key?('paginate') && (!config['paginate'].is_a?(Integer) || config['paginate'] < 1)
        Jekyll.logger.warn "Config Warning:", "The `paginate` key must be a" +
          " positive integer or nil. It's currently set to '#{config['paginate'].inspect}'."
        config['paginate'] = nil
      end

      config
    end
  end
end
