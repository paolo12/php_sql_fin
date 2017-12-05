<?php

/* admin.html */
class __TwigTemplate_690fd604b0476864c02c01d4bb609de4c35501c6574903ce8706874089a1405c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!--
\tAstral by HTML5 UP
\thtml5up.net | @ajlkn
\tFree for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
\t<head>
\t\t<title>Книга вопросов и ответов</title>
\t\t<meta charset=\"utf-8\" />
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />
\t\t<!--[if lte IE 8]><script src=\"assets/js/ie/html5shiv.js\"></script><![endif]-->
\t\t<link rel=\"stylesheet\" href=\"assets/css/main.css\" />
\t\t<noscript><link rel=\"stylesheet\" href=\"assets/css/noscript.css\" /></noscript>
\t\t<!--[if lte IE 8]><link rel=\"stylesheet\" href=\"assets/css/ie8.css\" /><![endif]-->
\t</head>
\t<body>

\t\t<!-- Wrapper-->
\t\t\t<div id=\"wrapper\">

\t\t\t\t<!-- Nav -->
\t\t\t\t\t<nav id=\"nav\">
\t\t\t\t\t\t<a href=\"#home\" class=\"icon fa-home active\"><span>Главная</span></a>
\t\t\t\t\t\t<a href=\"#admins\" class=\"icon fa-users\"><span>Админы</span></a>
\t\t\t\t\t\t<a href=\"#categories\" class=\"icon fa-list\"><span>Темы</span></a>
\t\t\t\t\t\t<a href=\"#questions\" class=\"icon fa-question\"><span>Вопросы</span></a>
\t\t\t\t\t\t<a href=\"#answers\" class=\"icon fa-comments\"><span>Ответы</span></a>
\t\t\t\t\t\t<a href=\"/index.php\" class=\"icon fa-sign-out\"><span>Выход</span></a>
\t\t\t\t\t</nav>

\t\t\t\t<!-- Main -->
\t\t\t\t\t<div id=\"main\">

\t\t\t\t\t\t<!-- Home -->
\t\t\t\t\t\t\t<article id=\"home\" class=\"panel\">
\t\t\t\t\t\t\t\t<header>
\t\t\t\t\t\t\t\t\t<h1>Книга вопросов<br> и ответов</h1>
\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t<a href=\"#admins\" class=\"jumplink pic\">
\t\t\t\t\t\t\t\t\t<span class=\"arrow icon fa-chevron-right\"><span>Перейти к вопросам и ответам</span></span>
\t\t\t\t\t\t\t\t\t<img src=\"images/me.jpg\" alt=\"\" />
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<p>Панель администрирования</p>
\t\t\t\t\t\t\t</article>

\t\t\t\t\t\t<!-- Admins -->
\t\t\t\t\t\t\t<article id=\"admins\" class=\"panel\">
\t\t\t\t\t\t\t\t<header>
\t\t\t\t\t\t\t\t\t<h2>Список администраторов</h2>
\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t<table>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<th>Логин</th>
\t\t\t\t\t\t\t\t\t<th>E-mail</th>
\t\t\t\t\t\t\t\t\t<th>Действия</th>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["all_admins"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["admin"]) {
            // line 58
            echo "\t\t\t\t\t\t\t\t<tr> 
\t\t\t\t\t\t\t\t\t<td> ";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["admin"], "login", array(), "array"), "html", null, true);
            echo " </td>
\t\t\t\t\t\t\t\t\t<td> ";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["admin"], "email", array(), "array"), "html", null, true);
            echo " </td>
\t\t\t\t\t\t\t\t\t<td> <a href=?admin_id=";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["admin"], "id", array(), "array"), "html", null, true);
            echo "&action=edit#admins>Изменить</a>&nbsp;<a href=edit_admin.php?admin_id=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["admin"], "id", array(), "array"), "html", null, true);
            echo "&action=delete#admins>Удалить</a></td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['admin'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t<p>Добавить нового администратора</p>
\t\t\t\t\t\t\t\t<form  method=\"post\">
\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"6u 12u\$(mobile)\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"name\" placeholder=\"";
        // line 70
        echo twig_escape_filter($this->env, ($context["post_name"] ?? null), "html", null, true);
        echo "\" />
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"6u\$ 12u\$(mobile)\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"email\" name=\"email\" placeholder=\"";
        // line 73
        echo twig_escape_filter($this->env, ($context["post_email"] ?? null), "html", null, true);
        echo "\"/>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"6u 12u\$(mobile)\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"password\" name=\"password\" placeholder=\"Password\"/>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"6u\$ 12u\$(mobile)\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"submit\" value=\"Зарегистрировать\" />
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t</article>\t\t\t\t\t\t\t
\t\t\t\t\t\t<!-- Categories -->
\t\t\t\t\t\t\t<article id=\"categories\" class=\"panel\">
\t\t\t\t\t\t\t\t<header>
\t\t\t\t\t\t\t\t\t<h2>Темы</h2>
\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t<table>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<th>Название темы</th>
\t\t\t\t\t\t\t\t\t<th>Всего вопросов</th>
\t\t\t\t\t\t\t\t\t<th>Из них опубликованно</th>
\t\t\t\t\t\t\t\t\t<th>Из них без ответа</th>
\t\t\t\t\t\t\t\t\t<th>Действия</th>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t";
        // line 98
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["all_categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 99
            echo "\t\t\t\t\t\t\t\t<tr> 
\t\t\t\t\t\t\t\t\t<td><b>";
            // line 100
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["category"], "name", array(), "array"), "html", null, true);
            echo "</b></td>
\t\t\t\t\t\t\t\t\t<td>";
            // line 101
            echo twig_escape_filter($this->env, showNumberQuestions(twig_get_attribute($this->env, $this->getSourceContext(), $context["category"], "id", array(), "array")), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t<td>";
            // line 102
            echo twig_escape_filter($this->env, showNumberShowQuestions(twig_get_attribute($this->env, $this->getSourceContext(), $context["category"], "id", array(), "array")), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t<td>";
            // line 103
            echo twig_escape_filter($this->env, showNumberHideQuestions(twig_get_attribute($this->env, $this->getSourceContext(), $context["category"], "id", array(), "array")), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t<td> <a href=admin.php?category_id=";
            // line 104
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["category"], "id", array(), "array"), "html", null, true);
            echo "&action=delete#categories>Удалить</a></td>
\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 106
        echo "\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t<p>Добавить тему</p>
\t\t\t\t\t\t\t\t<form  method=\"post\">
\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"6u 12u\$(mobile)\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"set_category_name\"/>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"6u\$ 12u\$(mobile)\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"submit\" value=\"Добавить\" />
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t</article>

\t\t\t\t\t\t<!-- Questions -->
\t\t\t\t\t\t\t<article id=\"questions\" class=\"panel\">
\t\t\t\t\t\t\t\t<header>
\t\t\t\t\t\t\t\t\t<h2>Вопросы/ответы</h2>
\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t<span id=\"ctgmenu\" class='left'>
\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t";
        // line 130
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["all_categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 131
            echo "\t\t\t\t\t\t\t\t\t\t<li><a href=?id=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["category"], "id", array(), "array"), "html", null, true);
            echo "#questions> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["category"], "name", array(), "array"), "html", null, true);
            echo " </a></li>
\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 133
        echo "\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</span> 
\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t";
        // line 136
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["all_questions"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["question"]) {
            // line 137
            echo "\t\t\t\t\t\t\t\t\t\t\t<li><a href=?question_id=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["question"], "id", array(), "array"), "html", null, true);
            echo "#answers> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["question"], "content", array(), "array"), "html", null, true);
            echo " </a></li></li>
\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['question'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 139
        echo "\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</article>
\t\t\t\t\t\t
\t\t\t\t\t\t<!-- Answers -->
\t\t\t\t\t\t\t<article id=\"answers\" class=\"panel\">
\t\t\t\t\t\t\t\t<header>
\t\t\t\t\t\t\t\t\t<h2>Дайте ответ на выбранный вопрос:</h2>
\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t<form  method=\"post\">
\t\t\t\t\t\t\t\t\t<b>Вопрос:</b>
\t\t\t\t\t\t\t\t\t<textarea name=\"message\">";
        // line 149
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["one_question"] ?? null), "content", array(), "array"), "html", null, true);
        echo "</textarea>
\t\t\t\t\t\t\t\t\t<b>Ответ:</b>
\t\t\t\t\t\t\t\t\t";
        // line 151
        if (twig_test_empty(($context["all_answers"] ?? null))) {
            // line 152
            echo "\t\t\t\t\t\t\t\t\t\t<textarea name=\"set_answer\" placeholder=\"Введите ответ\"></textarea>
\t\t\t\t\t\t\t\t\t";
        } else {
            // line 154
            echo "\t\t\t\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["all_answers"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["answer"]) {
                // line 155
                echo "\t\t\t\t\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["one_question"] ?? null), "id", array(), "array") == twig_get_attribute($this->env, $this->getSourceContext(), $context["answer"], "question_id", array(), "array"))) {
                    // line 156
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<textarea name=\"set_answer\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["answer"], "content", array(), "array"), "html", null, true);
                    echo "</textarea>
\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 157
                echo "\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['answer'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 159
            echo "\t\t\t\t\t\t\t\t\t";
        }
        // line 160
        echo "\t\t\t\t\t\t\t\t\t<input type='submit' value=\"Обновить\" />
\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t<header>
\t\t\t\t\t\t\t\t\t<h2>Дополните базу вопросом с ответом:</h2>
\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t<form  method=\"post\" >
\t\t\t\t\t\t\t\t\t<b>Тема:</b>
\t\t\t\t\t\t\t\t\t<select name=\"category_name\">
\t\t\t\t\t\t\t\t\t\t<option selected=\"selected\">Выберите тему</option>
\t\t\t\t\t\t\t\t\t\t";
        // line 171
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["all_categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 172
            echo "\t\t\t\t\t\t\t\t\t\t\t<option> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["category"], "name", array(), "array"), "html", null, true);
            echo " </option>
\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 174
        echo "\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t<b>Вопрос:</b>
\t\t\t\t\t\t\t\t\t<textarea name=\"set_question\" placeholder=\"Введите вопрос\"></textarea>
\t\t\t\t\t\t\t\t\t<b>Ответ:</b>
\t\t\t\t\t\t\t\t\t<textarea name=\"set_answer\" placeholder=\"Введите ответ\"></textarea>
\t\t\t\t\t\t\t\t\t<input type='submit' value=\"Добавить\" />
\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t</article>
\t\t\t\t\t</div>

\t\t\t\t<!-- Footer -->
\t\t\t\t\t<div id=\"footer\">
\t\t\t\t\t\t<ul class=\"copyright\">
\t\t\t\t\t\t\t<li>&copy; Книга вопросов и ответов 2017</li><li>Design: <a href=\"http://html5up.net\">HTML5 UP</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>

\t\t\t</div>

\t\t<!-- Scripts -->
\t\t\t<script src=\"assets/js/jquery.min.js\"></script>
\t\t\t<script src=\"assets/js/skel.min.js\"></script>
\t\t\t<script src=\"assets/js/skel-viewport.min.js\"></script>
\t\t\t<script src=\"assets/js/util.js\"></script>
\t\t\t<!--[if lte IE 8]><script src=\"assets/js/ie/respond.min.js\"></script><![endif]-->
\t\t\t<script src=\"assets/js/main.js\"></script>
\t\t<br>
\t</body>
</html>";
    }

    public function getTemplateName()
    {
        return "admin.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  310 => 174,  301 => 172,  297 => 171,  284 => 160,  281 => 159,  274 => 157,  268 => 156,  265 => 155,  260 => 154,  256 => 152,  254 => 151,  249 => 149,  237 => 139,  226 => 137,  222 => 136,  217 => 133,  206 => 131,  202 => 130,  176 => 106,  168 => 104,  164 => 103,  160 => 102,  156 => 101,  152 => 100,  149 => 99,  145 => 98,  117 => 73,  111 => 70,  103 => 64,  92 => 61,  88 => 60,  84 => 59,  81 => 58,  77 => 57,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!--
\tAstral by HTML5 UP
\thtml5up.net | @ajlkn
\tFree for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
\t<head>
\t\t<title>Книга вопросов и ответов</title>
\t\t<meta charset=\"utf-8\" />
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />
\t\t<!--[if lte IE 8]><script src=\"assets/js/ie/html5shiv.js\"></script><![endif]-->
\t\t<link rel=\"stylesheet\" href=\"assets/css/main.css\" />
\t\t<noscript><link rel=\"stylesheet\" href=\"assets/css/noscript.css\" /></noscript>
\t\t<!--[if lte IE 8]><link rel=\"stylesheet\" href=\"assets/css/ie8.css\" /><![endif]-->
\t</head>
\t<body>

\t\t<!-- Wrapper-->
\t\t\t<div id=\"wrapper\">

\t\t\t\t<!-- Nav -->
\t\t\t\t\t<nav id=\"nav\">
\t\t\t\t\t\t<a href=\"#home\" class=\"icon fa-home active\"><span>Главная</span></a>
\t\t\t\t\t\t<a href=\"#admins\" class=\"icon fa-users\"><span>Админы</span></a>
\t\t\t\t\t\t<a href=\"#categories\" class=\"icon fa-list\"><span>Темы</span></a>
\t\t\t\t\t\t<a href=\"#questions\" class=\"icon fa-question\"><span>Вопросы</span></a>
\t\t\t\t\t\t<a href=\"#answers\" class=\"icon fa-comments\"><span>Ответы</span></a>
\t\t\t\t\t\t<a href=\"/index.php\" class=\"icon fa-sign-out\"><span>Выход</span></a>
\t\t\t\t\t</nav>

\t\t\t\t<!-- Main -->
\t\t\t\t\t<div id=\"main\">

\t\t\t\t\t\t<!-- Home -->
\t\t\t\t\t\t\t<article id=\"home\" class=\"panel\">
\t\t\t\t\t\t\t\t<header>
\t\t\t\t\t\t\t\t\t<h1>Книга вопросов<br> и ответов</h1>
\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t<a href=\"#admins\" class=\"jumplink pic\">
\t\t\t\t\t\t\t\t\t<span class=\"arrow icon fa-chevron-right\"><span>Перейти к вопросам и ответам</span></span>
\t\t\t\t\t\t\t\t\t<img src=\"images/me.jpg\" alt=\"\" />
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<p>Панель администрирования</p>
\t\t\t\t\t\t\t</article>

\t\t\t\t\t\t<!-- Admins -->
\t\t\t\t\t\t\t<article id=\"admins\" class=\"panel\">
\t\t\t\t\t\t\t\t<header>
\t\t\t\t\t\t\t\t\t<h2>Список администраторов</h2>
\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t<table>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<th>Логин</th>
\t\t\t\t\t\t\t\t\t<th>E-mail</th>
\t\t\t\t\t\t\t\t\t<th>Действия</th>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t{% for admin in all_admins %}
\t\t\t\t\t\t\t\t<tr> 
\t\t\t\t\t\t\t\t\t<td> {{ admin['login']}} </td>
\t\t\t\t\t\t\t\t\t<td> {{ admin['email']}} </td>
\t\t\t\t\t\t\t\t\t<td> <a href=?admin_id={{ admin['id'] }}&action=edit#admins>Изменить</a>&nbsp;<a href=edit_admin.php?admin_id={{ admin['id'] }}&action=delete#admins>Удалить</a></td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t<p>Добавить нового администратора</p>
\t\t\t\t\t\t\t\t<form  method=\"post\">
\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"6u 12u\$(mobile)\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"name\" placeholder=\"{{ post_name }}\" />
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"6u\$ 12u\$(mobile)\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"email\" name=\"email\" placeholder=\"{{ post_email }}\"/>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"6u 12u\$(mobile)\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"password\" name=\"password\" placeholder=\"Password\"/>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"6u\$ 12u\$(mobile)\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"submit\" value=\"Зарегистрировать\" />
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t</article>\t\t\t\t\t\t\t
\t\t\t\t\t\t<!-- Categories -->
\t\t\t\t\t\t\t<article id=\"categories\" class=\"panel\">
\t\t\t\t\t\t\t\t<header>
\t\t\t\t\t\t\t\t\t<h2>Темы</h2>
\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t<table>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<th>Название темы</th>
\t\t\t\t\t\t\t\t\t<th>Всего вопросов</th>
\t\t\t\t\t\t\t\t\t<th>Из них опубликованно</th>
\t\t\t\t\t\t\t\t\t<th>Из них без ответа</th>
\t\t\t\t\t\t\t\t\t<th>Действия</th>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t{% for category in all_categories %}
\t\t\t\t\t\t\t\t<tr> 
\t\t\t\t\t\t\t\t\t<td><b>{{ category['name']}}</b></td>
\t\t\t\t\t\t\t\t\t<td>{{ category['id']|number_questions }}</td>
\t\t\t\t\t\t\t\t\t<td>{{ category['id']|number_show_questions }}</td>
\t\t\t\t\t\t\t\t\t<td>{{ category['id']|number_hide_questions }}</td>
\t\t\t\t\t\t\t\t\t<td> <a href=admin.php?category_id={{ category['id'] }}&action=delete#categories>Удалить</a></td>
\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t<p>Добавить тему</p>
\t\t\t\t\t\t\t\t<form  method=\"post\">
\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"6u 12u\$(mobile)\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"set_category_name\"/>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"6u\$ 12u\$(mobile)\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"submit\" value=\"Добавить\" />
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t</article>

\t\t\t\t\t\t<!-- Questions -->
\t\t\t\t\t\t\t<article id=\"questions\" class=\"panel\">
\t\t\t\t\t\t\t\t<header>
\t\t\t\t\t\t\t\t\t<h2>Вопросы/ответы</h2>
\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t<span id=\"ctgmenu\" class='left'>
\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t{% for category in all_categories %}
\t\t\t\t\t\t\t\t\t\t<li><a href=?id={{ category['id'] }}#questions> {{ category['name']}} </a></li>
\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</span> 
\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t{% for question in all_questions %}
\t\t\t\t\t\t\t\t\t\t\t<li><a href=?question_id={{ question['id'] }}#answers> {{ question['content'] }} </a></li></li>
\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</article>
\t\t\t\t\t\t
\t\t\t\t\t\t<!-- Answers -->
\t\t\t\t\t\t\t<article id=\"answers\" class=\"panel\">
\t\t\t\t\t\t\t\t<header>
\t\t\t\t\t\t\t\t\t<h2>Дайте ответ на выбранный вопрос:</h2>
\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t<form  method=\"post\">
\t\t\t\t\t\t\t\t\t<b>Вопрос:</b>
\t\t\t\t\t\t\t\t\t<textarea name=\"message\">{{ one_question['content'] }}</textarea>
\t\t\t\t\t\t\t\t\t<b>Ответ:</b>
\t\t\t\t\t\t\t\t\t{% if all_answers is empty %}
\t\t\t\t\t\t\t\t\t\t<textarea name=\"set_answer\" placeholder=\"Введите ответ\"></textarea>
\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t{% for answer in all_answers %}
\t\t\t\t\t\t\t\t\t\t\t{% if one_question['id'] == answer['question_id'] %}
\t\t\t\t\t\t\t\t\t\t\t\t<textarea name=\"set_answer\">{{ answer['content'] }}</textarea>
\t\t\t\t\t\t\t\t\t\t\t{% endif %}\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t<input type='submit' value=\"Обновить\" />
\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t<header>
\t\t\t\t\t\t\t\t\t<h2>Дополните базу вопросом с ответом:</h2>
\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t<form  method=\"post\" >
\t\t\t\t\t\t\t\t\t<b>Тема:</b>
\t\t\t\t\t\t\t\t\t<select name=\"category_name\">
\t\t\t\t\t\t\t\t\t\t<option selected=\"selected\">Выберите тему</option>
\t\t\t\t\t\t\t\t\t\t{% for category in all_categories %}
\t\t\t\t\t\t\t\t\t\t\t<option> {{ category['name']}} </option>
\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t<b>Вопрос:</b>
\t\t\t\t\t\t\t\t\t<textarea name=\"set_question\" placeholder=\"Введите вопрос\"></textarea>
\t\t\t\t\t\t\t\t\t<b>Ответ:</b>
\t\t\t\t\t\t\t\t\t<textarea name=\"set_answer\" placeholder=\"Введите ответ\"></textarea>
\t\t\t\t\t\t\t\t\t<input type='submit' value=\"Добавить\" />
\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t</article>
\t\t\t\t\t</div>

\t\t\t\t<!-- Footer -->
\t\t\t\t\t<div id=\"footer\">
\t\t\t\t\t\t<ul class=\"copyright\">
\t\t\t\t\t\t\t<li>&copy; Книга вопросов и ответов 2017</li><li>Design: <a href=\"http://html5up.net\">HTML5 UP</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>

\t\t\t</div>

\t\t<!-- Scripts -->
\t\t\t<script src=\"assets/js/jquery.min.js\"></script>
\t\t\t<script src=\"assets/js/skel.min.js\"></script>
\t\t\t<script src=\"assets/js/skel-viewport.min.js\"></script>
\t\t\t<script src=\"assets/js/util.js\"></script>
\t\t\t<!--[if lte IE 8]><script src=\"assets/js/ie/respond.min.js\"></script><![endif]-->
\t\t\t<script src=\"assets/js/main.js\"></script>
\t\t<br>
\t</body>
</html>", "admin.html", "/home/p/pikkolo/faqbase/public_html/templates/admin.html");
    }
}
