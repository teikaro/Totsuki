{% extends 'base.html.twig' %}

{% block title %}Hello MainController!{% endblock %}

{% block body %}
<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>

<div class="example-wrapper">
    <h1>Hello {{ controller_name }}! ✅</h1>

    This friendly message is coming from:
    <ul>
        <li>Your controller at <code><a href="{{ 'C:/Users/varra/Desktop/Tôtsuki/src/Controller/MainController.php'|file_link(0) }}">src/Controller/MainController.php</a></code></li>
        <li>Your template at <code><a href="{{ 'C:/Users/varra/Desktop/Tôtsuki/templates/main/accueil.html.twig'|file_link(0) }}">templates/main/index.html.twig</a></code></li>
    </ul>
</div>
{% endblock %}
