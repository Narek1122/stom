         h     (                 @                                      ?��/��S��5                                                    j��Xt��y��}��                                                ���}��s��f��9                                        �q=�p4�p- X���=�Ғ��                                    �l1�k
��k
��lv�k6�j��e��m[�n&                            �k
��k
��k
��m�o-�k
��k
��k
��k
��l\�k                    �k
��k
��k
��k;    �ko�k
��k
��k
��k
��k
��k
	                �k
��k
��k
��k
��k
z�kC�k
��k
��k
��k
��k
��k
��k
            �k
V�k
��k
��k
��k
��k
��k
X�k
G�k
��k
��k
��k
��k	D                �k
\�k
��k
��k
��k
��k
��l�l�k
��k
��k
��k
t                    �k,�k
��k
��k
��k
��l    �k
��k
��k
��k
;                        �m!�m#,�j��j��ne�k[�k
��k
��l9                                        Y���9�۽�t4�o+�p9                                        n�� w��u�����)                                                ���3���u��U��                                                    c��B��-��{��                ��  �  �  �  �  �  �  �  �  �  �!  �  �  �  �  �                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    n YAML
    Given I have a movies directory
    And I have a movies/_posts directory
    And I have a _layouts directory
    And I have the following post in "movies":
      | title     | date       | layout | categories        | content                 |
      | Star Wars | 2009-03-27 | simple | [film, scifi]     | Luke, I am your father. |
    And I have a simple layout that contains "Post category: {{ page.categories }}"
    When I run jekyll build
    Then the _site directory should exist
    And I should see "Post category: movies" in "_site/movies/film/scifi/2009/03/27/star-wars.html"

  Scenario: Use post.categories variable when category is in a folder and duplicated category is in YAML
    Given I have a movies directory
    And I have a movies/_posts directory
    And I have a _layouts directory
    And I have the following post in "movies":
      | title     | date       | layout | category | content                 |
      | Star Wars | 2009-03-27 | simple | movies   | Luke, I am your father. |
    And I have a simple layout that contains "Post category: {{ page.categories }}"
    When I run jekyll build
    Then the _site directory should exist
    And I should see "Post category: movies" in "_site/movies/2009/03/27/star-wars.html"

  Scenario: Use post.tags variable
    Given I have a _posts directory
    And I have a _layouts directory
    And I have the following post:
      | title     | date       | layout | tag   | content                 |
      | Star Wars | 2009-05-18 | simple | twist | Luke, I am your father. |
    And I have a simple layout that contains "Post tags: {{ page.tags }}"
    When I run jekyll build
    Then the _site directory should exist
    And I should see "Post tags: twist" in "_site/2009/05/18/star-wars.html"

  Scenario: Use post.categories variable when categories are in folders
    Given I have a scifi directory
    And I have a scifi/movies directory
    And I have a scifi/movies/_posts directory
    And I have a _layouts directory
    And I have the following post in "scifi/movies":
      | title     | date       | layout | content                 |
      | Star Wars | 2009-03-27 | simple | Luke, I am your father. |
    And I have a simple layout that contains "Post categories: {{ page.categories | array_to_sentence_string }}"
    When I run jekyll build
    Then the _site directory should exist
    And I should see "Post categories: scifi and movies" in "_site/scifi/movies/2009/03/27/star-wars.html"

  Scenario: Use post.categories variable when categories are in folders with mixed case
    Given I have a scifi directory
    And I have a scifi/Movies directory
    And I have a scifi/Movies/_posts directory
    And I have a _layouts directory
    And I have the following post in "scifi/Movies":
      | title     | date       | layout | content                 |
      | Star Wars | 2009-03-27 | simple | Luke, I am your father. |
    And I have a simple layout that contains "Post categories: {{ page.categories | array_to_sentence_string }}"
    When I run jekyll build
    Then the _site directory should exist
    And I should see "Post categories: scifi and Movies" in "_site/scifi/movies/2009/03/27/star-wars.html"

  Scenario: Use post.categories variable when category is in YAML
    Given I have a _posts directory
    And I have a _layouts directory
    And I have the following post:
      | title     | date       | layout | category | content                 |
      | Star Wars | 2009-03-27 | simple | movies   | Luke, I am your father. |
    And I have a simple layout that contains "Post category: {{ page.categories }}"
    When I run jekyll build
    Then the _site directory should exist
    And I should see "Post category: movies" in "_site/movies/2009/03/27/star-wars.html"

  Scenario: Use post.categories variable when category is in YAML and is mixed-case
    Given I have a _posts directory
    And I have a _layouts directory
    And I have the following post:
      | title     | date       | layout | category | content                 |
      | Star Wars | 2009-03-27 | simple | Movies   | Luke, I am your father. |
    And I have a simple layout that contains "Post category: {{ page.categories }}"
    When I run jekyll build
    Then the _site directory should exist
    And I should see "Post category: Movies" in "_site/movies/2009/03/27/star-wars.html"

  Scenario: Use post.categories variable when categories are in YAML
    Given I have a _posts directory
    And I have a _layouts directory
    And I have the following post:
      | title     | date       | layout | categories          | content                 |
      | Star Wars | 2009-03-27 | simple | ['scifi', 'movies'] | Luke, I am your father. |
    And I have a simple layout that contains "Post categories: {{ page.categories | array_to_sentence_string }}"
    When I run jekyll build
    Then the _site directory should exist
    And I should see "Post categories: scifi and movies" in "_site/scifi/movies/2009/03/27/star-wars.html"

  Scenario: Use post.categories variable when categories are in YAML and are duplicated
    Given I have a _posts directory
    And I have a _layouts directory
    And I have the following post:
      | title     | date       | layout | categories           | content                 |
      | Star Wars | 2009-03-27 | simple | ['movies', 'movies'] | Luke, I am your father. |
    And I have a simple layout that contains "Post category: {{ page.categories }}"
    When I run jekyll build
    Then the _site directory should exist
    And I should see "Post category: movies" in "_site/movies/2009/03/27/star-wars.html"

  Scenario: Use post.categories variable when categories are in YAML with mixed case
    Given I have a _posts directory
    And I have a _layouts directory
    And I have the following posts:
      | title     | date       | layout | categories          | content                     |
      | Star Wars | 2009-03-27 | simple | ['scifi', 'Movies'] | Luke, I am your father.     |
      | Star Trek | 2013-03-17 | simple | ['SciFi', 'movies'] | Jean Luc, I am your father. |
    And I have a simple layout that contains "Post categories: {{ page.categories | array_to_sentence_string }}"
    When I run jekyll build
    Then the _site directory should exist
    And I should see "Post categories: scifi and Movies" in "_site/scifi/movies/2009/03/27/star-wars.html"
    And I should see "Post categories: SciFi and movies" in "_site/scifi/movies/2013/03/17/star-trek.html"

  Scenario Outline: Use page.path variable
    Given I have a <dir>/_posts directory
    And I have the following post in "<dir>":
      | title   | type | date       | content                      |
      | my-post | html | 2013-04-12 | Source path: {{ page.path }} |
    When I run jekyll build
    Then the _site directory should exist
    And I should see "Source path: <path_prefix>_posts/2013-04-12-my-post.html" in "_site/<dir>/2013/04/12/my-post.html"

    Examples:
      | dir        | path_prefix |
      | .          |             |
      | dir        | dir/        |
      | dir/nested | dir/nested/ |

  Scenario: Override page.path variable
    Given I have a _posts directory
    And I have the following post:
      | title    | date       | path               | content                      |
      | override | 2013-04-12 | override-path.html | Custom path: {{ page.path }} |
    When I run jekyll build
    Then the _site directory should exist
    And I should see "Custom path: override-path.html" in "_site/2013/04/12/override.html"

  Scenario: Disable a post from being published
    Given I have a _posts directory
    And I have an "index.html" file that contains "Published!"
    And I have the following post:
      | title     | date       | layout | published | content                 |
      | Star Wars | 2009-03-27 | simple | false     | Luke, I am your father. |
    When I run jekyll build
    Then the _site directory should exist
    And the "_site/2009/03/27/star-wars.html" file should not exist
    And I should see "Published!" in "_site/index.html"

  Scenario: Use a custom variable
    Given I have a _posts directory
    And I have a _layouts directory
    And I have the following post:
      | title     | date       | layout | author      | content                 |
      | Star Wars | 2009-03-27 | simple | Darth Vader | Luke, I am your father. |
    And I have a simple layout that contains "Post author: {{ page.author }}"
    When I run jekyll build
    Then the _site directory should exist
    And I should see "Post author: Darth Vader" in "_site/2009/03/27/star-wars.html"

  Scenario: Previous and next posts title
    Given I have a _posts directory
    And I have a _layouts directory
    And I have the following posts:
      | title            | date       | layout  | author      | content                 |
      | Star Wars        | 2009-03-27 | ordered | Darth Vader | Luke, I am your father. |
      | Some like it hot | 2009-04-27 | ordered | Osgood      | Nobody is perfect.      |
      | Terminator       | 2009-05-27 | ordered | Arnold      | Sayonara, baby          |
    And I have a ordered layout that contains "Previous post: {{ page.previous.title }} and next post: {{ page.next.title }}"
    When I run jekyll build
    Then the _site directory should exist
    And I should see "next post: Some like it hot" in "_site/2009/03/27/star-wars.html"
    And I should see "Previous post: Some like it hot" in "_site/2009/05/27/terminator.html"
