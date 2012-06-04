StriideTwitterbootstrapBundle
=============================

The intent here is to provide a convenient bridge for twitterbootstrap components

Components
----------

Alerts
------

* Alert/info.html.twig

Modal
-----

* Modal/errorModal.html.twig

Pager
-----

* Navigation/pager.html.twig

Used like:

{% render 'StriideTwitterbootstrapBundle:Navigation:pager' with {page: 1} %}

We also have several twig methods and filters:

Twig Methods
------------

* form_value
* field_label
* field_tip
* is_inline

Twig Filters
------------

* field_has_tip

Form Themes
-----------

* Form/form_theme.html.twig

Routing
-------

StriideTwitterbootstrapBundle:
    resource: "@StriideTwitterbootstrapBundle/Resources/config/routing.yml"
    prefix:   /
