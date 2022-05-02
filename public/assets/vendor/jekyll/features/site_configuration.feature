���� Exif  II*            �� Ducky       ��*http://ns.adobe.com/xap/1.0/ <?xpacket begin="﻿" id="W5M0MpCehiHzreSzNTczkc9d"?> <x:xmpmeta xmlns:x="adobe:ns:meta/" x:xmptk="Adobe XMP Core 5.5-c014 79.151481, 2013/03/13-12:09:15        "> <rdf:RDF xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"> <rdf:Description rdf:about="" xmlns:xmp="http://ns.adobe.com/xap/1.0/" xmlns:xmpMM="http://ns.adobe.com/xap/1.0/mm/" xmlns:stRef="http://ns.adobe.com/xap/1.0/sType/ResourceRef#" xmp:CreatorTool="Adobe Photoshop CC (Windows)" xmpMM:InstanceID="xmp.iid:2001612D14B511E9B2CA9F08D6D52C27" xmpMM:DocumentID="xmp.did:2001612E14B511E9B2CA9F08D6D52C27"> <xmpMM:DerivedFrom stRef:instanceID="xmp.iid:2001612B14B511E9B2CA9F08D6D52C27" stRef:documentID="xmp.did:2001612C14B511E9B2CA9F08D6D52C27"/> </rdf:Description> </rdf:RDF> </x:xmpmeta> <?xpacket end="r"?>�� Adobe d�   �� � #%'%#//33//@@@@@@@@@@@@@@@&&0##0+.'''.+550055@@?@@@@@@@@@@@@��   " �� j                                           a!1AQq�"Bs             !q1a"��   ? �9�2�iŀ��$ԡV�,aV��Z��zҟO��A=�W=��M��	m�q�M)1��*�m<���                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                en I run jekyll build
    Then the _site directory should exist
    And I should see "<a href=\"http://google.com\">Google</a>" in "_site/index.html"

  Scenario: Highlight code with pygments
    Given I have an "index.html" page that contains "{% highlight ruby %} puts 'Hello world!' {% endhighlight %}"
    When I run jekyll build
    Then the _site directory should exist
    And I should see "Hello world!" in "_site/index.html"
    And I should see "class=\"highlight\"" in "_site/index.html"

  Scenario: Highlight code with rouge
    Given I have an "index.html" page that contains "{% highlight ruby %} puts 'Hello world!' {% endhighlight %}"
    And I have a configuration file with "highlighter" set to "rouge"
    When I run jekyll build
    Then the _site directory should exist
    And I should see "Hello world!" in "_site/index.html"
    And I should see "class=\"highlight\"" in "_site/index.html"

  Scenario: Rouge renders code block once
    Given I have a configuration file with "highlighter" set to "rouge"
    And I have a _posts directory
    And I have the following post:
      | title | date             | layout  | content                                      |
      | foo   | 2014-04-27 11:34 | default | {% highlight text %} test {% endhighlight %} |
    When I run jekyll build
    Then I should not see "highlight(.*)highlight" in "_site/2014/04/27/foo.html"

  Scenario: Set time and no future dated posts
    Given I have a _layouts directory
    And I have a page layout that contains "Page Layout: {{ site.posts.size }} on {{ site.time | date: "%Y-%m-%d" }}"
    And I have a post layout that contains "Post Layout: {{ content }}"
    And I have an "index.html" page with layout "page" that contains "site index page"
    And I have a configuration file with:
      | key         | value        |
      | time        | 2010-01-01   |
      | future      | false        |
    And I have a _posts directory
    And I have the following posts:
      | title  | date       | layout | content             |
      | entry1 | 2007-12-31 | post   | content for entry1. |
      | entry2 | 2020-01-31 | post   | content for entry2. |
    When I run jekyll build
    Then the _site directory should exist
    And I should see "Page Layout: 1 on 2010-01-01" in "_site/index.html"
    And I should see "Post Layout: <p>content for entry1.</p>" in "_site/2007/12/31/entry1.html"
    And the "_site/2020/01/31/entry2.html" file should not exist

  Scenario: Set time and future dated posts allowed
    Given I have a _layouts directory
    And I have a page layout that contains "Page Layout: {{ site.posts.size }} on {{ site.time | date: "%Y-%m-%d" }}"
    And I have a post layout that contains "Post Layout: {{ content }}"
    And I have an "index.html" page with layout "page" that contains "site index page"
    And I have a configuration file with:
      | key         | value        |
      | time        | 2010-01-01   |
      | future      | true         |
    And I have a _posts directory
    And I have the following posts:
      | title  | date       | layout | content             |
      | entry1 | 2007-12-31 | post   | content for entry1. |
      | entry2 | 2020-01-31 | post   | content for entry2. |
    When I run jekyll build
    Then the _site directory should exist
    And I should see "Page Layout: 2 on 2010-01-01" in "_site/index.html"
    And I should see "Post Layout: <p>content for entry1.</p>" in "_site/2007/12/31/entry1.html"
    And I should see "Post Layout: <p>content for entry2.</p>" in "_site/2020/01/31/entry2.html"

    Scenario: Generate proper dates with explicitly set timezone (same as posts' time)
      Given I have a _layouts directory
      And I have a page layout that contains "Page Layout: {{ site.posts.size }}"
      And I have a post layout that contains "Post Layout: {{ content }} built at {{ page.date | date_to_xmlschema }}"
      And I have an "index.html" page with layout "page" that contains "site index page"
      And I have a configuration file with:
        | key         | value            |
        | timezone    | America/New_York |
      And I have a _posts directory
      And I have the following posts:
        | title     | date                   | layout  | content             |
        | entry1    | 2013-04-09 23:22 -0400 | post    | content for entry1. |
        | entry2    | 2013-04-10 03:14 -0400 | post    | content for entry2. |
      When I run jekyll build
      Then the _site directory should exist
      And I should see "Page Layout: 2" in "_site/index.html"
      And I should see "Post Layout: <p>content for entry1.</p>\n built at 2013-04-09T23:22:00-04:00" in "_site/2013/04/09/entry1.html"
      And I should see "Post Layout: <p>content for entry2.</p>\n built at 2013-04-10T03:14:00-04:00" in "_site/2013/04/10/entry2.html"

    Scenario: Generate proper dates with explicitly set timezone (different than posts' time)
      Given I have a _layouts directory
      And I have a page layout that contains "Page Layout: {{ site.posts.size }}"
      And I have a post layout that contains "Post Layout: {{ content }} built at {{ page.date | date_to_xmlschema }}"
      And I have an "index.html" page with layout "page" that contains "site index page"
      And I have a configuration file with:
        | key         | value               |
        | timezone    | Pacific/Honolulu    |
      And I have a _posts directory
      And I have the following posts:
        | title     | date                   | layout  | content             |
        | entry1    | 2013-04-09 23:22 +0400 | post    | content for entry1. |
        | entry2    | 2013-04-10 03:14 +0400 | post    | content for entry2. |
      When I run jekyll build
      Then the _site directory should exist
      And I should see "Page Layout: 2" in "_site/index.html"
      And the "_site/2013/04/09/entry1.html" file should exist
      And the "_site/2013/04/09/entry2.html" file should exist
      And I should see "Post Layout: <p>content for entry1.</p>\n built at 2013-04-09T09:22:00-10:00" in "_site/2013/04/09/entry1.html"
      And I should see "Post Layout: <p>content for entry2.</p>\n built at 2013-04-09T13:14:00-10:00" in "_site/2013/04/09/entry2.html"

  Scenario: Limit the number of posts generated by most recent date
    Given I have a _posts directory
    And I have a configuration file with:
      | key         | value       |
      | limit_posts | 2           |
    And I have the following posts:
      | title   | date       | content                  |
      | Apples  | 2009-03-27 | An article about apples  |
      | Oranges | 2009-04-01 | An article about oranges |
      | Bananas | 2009-04-05 | An article about bananas |
    When I run jekyll build
    Then the _site directory should exist
    And the "_site/2009/04/05/bananas.html" file should exist
    And the "_site/2009/04/01/oranges.html" file should exist
    And the "_site/2009/03/27/apples.html" file should not exist

  Scenario: Copy over normally excluded files when they are explicitly included
    Given I have a ".gitignore" file that contains ".DS_Store"
    And I have an ".htaccess" file that contains "SomeDirective"
    And I have a configuration file with "include" set to:
      | value      |
      | .gitignore |
      | .foo       |
    When I run jekyll build
    Then the _site directory should exist
    And I should see ".DS_Store" in "_site/.gitignore"
    And the "_site/.htaccess" file should not exist

  Scenario: Using a different layouts directory
    Given I have a _theme directory
    And I have a page theme that contains "Page Layout: {{ site.posts.size }} on {{ site.time | date: "%Y-%m-%d" }}"
    And I have a post theme that contains "Post Layout: {{ content }}"
    And I have an "index.html" page with layout "page" that contains "site index page"
    And I have a configuration file with:
      | key         | value        |
      | time        | 2010-01-01   |
      | future      | true         |
      | layouts     | _theme       |
    And I have a _posts directory
    And I have the following posts:
      | title  | date       | layout | content             |
      | entry1 | 2007-12-31 | post   | content for entry1. |
      | entry2 | 2020-01-31 | post   | content for entry2. |
    When I run jekyll build
    Then the _site directory should exist
    And I should see "Page Layout: 2 on 2010-01-01" in "_site/index.html"
    And I should see "Post Layout: <p>content for entry1.</p>" in "_site/2007/12/31/entry1.html"
    And I should see "Post Layout: <p>content for entry2.</p>" in "_site/2020/01/31/entry2.html"

  Scenario: arbitrary file reads via layouts
    Given I have an "index.html" page with layout "page" that contains "FOO"
    And I have a "_config.yml" file that contains "layouts: '../../../../../../../../../../../../../../usr/include'"
    When I run jekyll build
    Then the _site directory should exist
    And I should see "FOO" in "_site/index.html"
    And I should not see " " in "_site/index.html"
