<?php

/* PfaSistemaBundle::filtro.html.twig */
class __TwigTemplate_7869e3001c898672711b97cb52efe4ba8264ceff4c51c3f00912dfae6b758626 extends Twig_Template
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
        $__internal_b9cd32615a00e15efd2b56f9627ecc63e172f6309cbd4240d2c292877f227eb3 = $this->env->getExtension("native_profiler");
        $__internal_b9cd32615a00e15efd2b56f9627ecc63e172f6309cbd4240d2c292877f227eb3->enter($__internal_b9cd32615a00e15efd2b56f9627ecc63e172f6309cbd4240d2c292877f227eb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PfaSistemaBundle::filtro.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"es\">
<head>

    <title>Peru Fight academy </title>

    <link href = \"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"screen\">
    <link href = \"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/lomio.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" >
    <link href = \"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/dashboard.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" >

    <script src = \"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("http://code.jquery.com/jquery.js"), "html", null, true);
        echo "\"></script>
    <script src = \"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

    <Link  href = \"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/estilos.css"), "html", null, true);
        echo "\" rel = \"stylesheet\" type = \"text/css\"  />

</head>

<body>

    <nav class=\"navbar navbar-inverse navbar-fixed-top\">
          <div class=\"container-fluid\">
            <a href=\"http://www.incuba.pe\"><img src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("imagenes/logo4.png"), "html", null, true);
        echo "\" class=\"logo\"></a>
            <div class=\"navbar-header\">
              <a class=\"navbar-brand\" href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("logout", array("slug" => ""));
        echo "\" >Cerrar Sesión</a>
            </div>
            
          </div>
    </nav>

    <div class=\"container-fluid\">
      <div class=\"row\">
        <div class=\"col-sm-3 col-md-2 sidebar\">
          <ul class=\"nav nav-sidebar\">
            
            <li><a href=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("pfa_sistema_homepage", array("slug" => ""));
        echo "\">Inicio <span class=\"sr-only\">(current)</span></a></li>
            
            <li><a href=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("Formulario", array("slug" => ""));
        echo "\">Matricular</a></li>

            <li><a href=\"";
        // line 39
        echo $this->env->getExtension('routing')->getPath("buscar", array("slug" => ""));
        echo "\">Buscar</a></li>

            <li class=\"active\"><a href=\"#\">Filtrar</a></li>

            <li><a href=\"";
        // line 43
        echo $this->env->getExtension('routing')->getPath("agentes", array("slug" => ""));
        echo "\">Agentes</a></li>   

            <li><a href=\"";
        // line 45
        echo $this->env->getExtension('routing')->getPath("ingresos", array("slug" => ""));
        echo "\">Ingresos</a></li>

          </ul>
        
        </div>

        <div class=\"col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main\">

            ";
        // line 53
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "

                <div class=\"col-md-3 col-sm-7\">
                    <div class=\"col-md-5 col-sm-3\">
                    ";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "disciplina", array()), 'label');
        echo "
                    </div>
                    <div class=\"col-md-7 col-sm-8\">
                    ";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "disciplina", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>
                </div>

                <div class=\"col-md-3 col-sm-7\">
                    <div class=\"col-md-3 col-sm-3\">
                    ";
        // line 66
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dia", array()), 'label');
        echo "
                    </div>
                    <div class=\"col-md-8 col-sm-8\">
                    ";
        // line 69
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dia", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>
                </div>

                <div class=\"col-md-3 col-sm-7\">
                    <div class=\"col-md-4 col-sm-3\">
                    ";
        // line 75
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vence", array()), 'label');
        echo "
                    </div>
                    <div class=\"col-md-8 col-sm-8\">
                    ";
        // line 78
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vence", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>
                </div>

                <div class=\"col-md-3 col-sm-7\">
                    <div class=\"col-md-4 col-sm-3\">
                    ";
        // line 84
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hora", array()), 'label');
        echo "
                    </div>
                    <div class=\"col-md-8 col-sm-8\">
                    ";
        // line 87
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hora", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>
                </div>
                <div class=\"\">
                    <div>
                        ";
        // line 92
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "buscar", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo " 
                    </div>
                </div>
            
            ";
        // line 96
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

            ";
        // line 98
        if (((isset($context["resultado"]) ? $context["resultado"] : $this->getContext($context, "resultado")) == null)) {
            // line 99
            echo "
            ";
        } else {
            // line 101
            echo "            <div class=\"col-md-8\">
            <table class=\"table table-striped\">
                <thead>
                    <tr>
                      <th>Apellido P.</th>
                      <th>Apellido M.</th>
                      <th>Nombres</th>
                      <th></th>
                    </tr>
                </thead>
                <tbody>
                ";
            // line 112
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["resultado"]) ? $context["resultado"] : $this->getContext($context, "resultado")));
            foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
                // line 113
                echo "
                        ";
                // line 114
                if (((isset($context["vence"]) ? $context["vence"] : $this->getContext($context, "vence")) == "todos")) {
                    // line 115
                    echo "                            <tr>
                                <td class=\"fila_2_n\">";
                    // line 116
                    echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "apellidop", array()), "html", null, true);
                    echo "</td>

                                <td class=\"fila_2_n\">";
                    // line 118
                    echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "apellidom", array()), "html", null, true);
                    echo "</td>

                                <td class=\"fila_2_n\">";
                    // line 120
                    echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "nombre", array()), "html", null, true);
                    echo "</td>
                        
                                <td class=\"\">
                                    <a href=\"";
                    // line 123
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("alumno", array("id" => $this->getAttribute($context["result"], "idalumno", array()))), "html", null, true);
                    echo "\">
                                        <img src=\"";
                    // line 124
                    echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("imagenes/icon-lupa.png"), "html", null, true);
                    echo "\" width=\"20\" height=\"20\"/> 
                                    </a>    
                                </td>
                            </tr>

                        ";
                }
                // line 130
                echo "
                        ";
                // line 131
                if (((isset($context["vence"]) ? $context["vence"] : $this->getContext($context, "vence")) == "activos")) {
                    // line 132
                    echo "
                            ";
                    // line 133
                    if ((twig_date_converter($this->env, $this->getAttribute($context["result"], "fechafinal", array())) > twig_date_converter($this->env))) {
                        // line 134
                        echo "                                <tr>
                                    <td class=\"fila_2_n\">";
                        // line 135
                        echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "apellidop", array()), "html", null, true);
                        echo " </td>

                                    <td class=\"fila_2_n\">";
                        // line 137
                        echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "apellidom", array()), "html", null, true);
                        echo "</td>

                                    <td class=\"fila_2_n\">";
                        // line 139
                        echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "nombre", array()), "html", null, true);
                        echo "</td>
                            
                                    <td class=\"\">
                                        <a href=\"";
                        // line 142
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("alumno", array("id" => $this->getAttribute($context["result"], "idalumno", array()))), "html", null, true);
                        echo "\">
                                            <img src=\"";
                        // line 143
                        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("imagenes/icon-lupa.png"), "html", null, true);
                        echo "\" width=\"20\" height=\"20\"/> 
                                        </a>    
                                    </td>
                                </tr>

                            ";
                    }
                    // line 149
                    echo "
                        ";
                }
                // line 151
                echo "
                        ";
                // line 152
                if (((isset($context["vence"]) ? $context["vence"] : $this->getContext($context, "vence")) == "vencidos")) {
                    // line 153
                    echo "
                            ";
                    // line 154
                    if ((twig_date_converter($this->env, $this->getAttribute($context["result"], "fechafinal", array())) < twig_date_converter($this->env))) {
                        // line 155
                        echo "                                <tr>
                                    <td class=\"fila_2_n\">";
                        // line 156
                        echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "apellidop", array()), "html", null, true);
                        echo " </td>

                                    <td class=\"fila_2_n\">";
                        // line 158
                        echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "apellidom", array()), "html", null, true);
                        echo "</td>

                                    <td class=\"fila_2_n\">";
                        // line 160
                        echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "nombre", array()), "html", null, true);
                        echo "</td>
                            
                                    <td class=\"\">
                                        <a href=\"";
                        // line 163
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("alumno", array("id" => $this->getAttribute($context["result"], "idalumno", array()))), "html", null, true);
                        echo "\">
                                            <img src=\"";
                        // line 164
                        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("imagenes/icon-lupa.png"), "html", null, true);
                        echo "\" width=\"20\" height=\"20\"/> 
                                        </a>    
                                    </td>
                                </tr>

                            ";
                    }
                    // line 170
                    echo "
                        ";
                }
                // line 172
                echo "
                        ";
                // line 173
                if (((isset($context["vence"]) ? $context["vence"] : $this->getContext($context, "vence")) == "5")) {
                    // line 174
                    echo "
                            ";
                    // line 175
                    if ((twig_date_converter($this->env, $this->getAttribute($context["result"], "fechafinal", array())) < twig_date_converter($this->env, "+5days"))) {
                        // line 176
                        echo "                                <tr>
                                    <td class=\"fila_2_n\">";
                        // line 177
                        echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "apellidop", array()), "html", null, true);
                        echo " </td>

                                    <td class=\"fila_2_n\">";
                        // line 179
                        echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "apellidom", array()), "html", null, true);
                        echo "</td>

                                    <td class=\"fila_2_n\">";
                        // line 181
                        echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "nombre", array()), "html", null, true);
                        echo "</td>
                            
                                    <td class=\"\">
                                        <a href=\"";
                        // line 184
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("alumno", array("id" => $this->getAttribute($context["result"], "idalumno", array()))), "html", null, true);
                        echo "\">
                                            <img src=\"";
                        // line 185
                        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("imagenes/icon-lupa.png"), "html", null, true);
                        echo "\" width=\"20\" height=\"20\"/> 
                                        </a>    
                                    </td>
                                </tr>

                            ";
                    }
                    // line 191
                    echo "
                        ";
                }
                // line 193
                echo "
                        ";
                // line 194
                if (((isset($context["vence"]) ? $context["vence"] : $this->getContext($context, "vence")) == "10")) {
                    // line 195
                    echo "
                            ";
                    // line 196
                    if ((twig_date_converter($this->env, $this->getAttribute($context["result"], "fechafinal", array())) < twig_date_converter($this->env, "+10days"))) {
                        // line 197
                        echo "                                <tr>
                                    <td class=\"fila_2_n\">";
                        // line 198
                        echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "apellidop", array()), "html", null, true);
                        echo " </td>

                                    <td class=\"fila_2_n\">";
                        // line 200
                        echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "apellidom", array()), "html", null, true);
                        echo "</td>

                                    <td class=\"fila_2_n\">";
                        // line 202
                        echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "nombre", array()), "html", null, true);
                        echo "</td>
                            
                                    <td class=\"\">
                                        <a href=\"";
                        // line 205
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("alumno", array("id" => $this->getAttribute($context["result"], "idalumno", array()))), "html", null, true);
                        echo "\">
                                            <img src=\"";
                        // line 206
                        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("imagenes/icon-lupa.png"), "html", null, true);
                        echo "\" width=\"20\" height=\"20\"/> 
                                        </a>    
                                    </td>
                                </tr>

                            ";
                    }
                    // line 212
                    echo "
                        ";
                }
                // line 214
                echo "
                        ";
                // line 215
                if (((isset($context["vence"]) ? $context["vence"] : $this->getContext($context, "vence")) == "20")) {
                    // line 216
                    echo "
                            ";
                    // line 217
                    if ((twig_date_converter($this->env, $this->getAttribute($context["result"], "fechafinal", array())) < twig_date_converter($this->env, "+20days"))) {
                        // line 218
                        echo "                                <tr>
                                    <td class=\"fila_2_n\">";
                        // line 219
                        echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "apellidop", array()), "html", null, true);
                        echo " </td>

                                    <td class=\"fila_2_n\">";
                        // line 221
                        echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "apellidom", array()), "html", null, true);
                        echo "</td>

                                    <td class=\"fila_2_n\">";
                        // line 223
                        echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "nombre", array()), "html", null, true);
                        echo "</td>
                            
                                    <td class=\"\">
                                        <a href=\"";
                        // line 226
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("alumno", array("id" => $this->getAttribute($context["result"], "idalumno", array()))), "html", null, true);
                        echo "\">
                                            <img src=\"";
                        // line 227
                        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("imagenes/icon-lupa.png"), "html", null, true);
                        echo "\" width=\"20\" height=\"20\"/> 
                                        </a>    
                                    </td>
                                </tr>

                            ";
                    }
                    // line 233
                    echo "
                        ";
                }
                // line 235
                echo "
                        ";
                // line 236
                if (((isset($context["vence"]) ? $context["vence"] : $this->getContext($context, "vence")) == "6")) {
                    // line 237
                    echo "
                            ";
                    // line 238
                    if ((twig_date_format_filter($this->env, $this->getAttribute($context["result"], "fechafinal", array()), "m") == twig_date_format_filter($this->env, "now", "m"))) {
                        // line 239
                        echo "
                                <tr>
                                    <td class=\"fila_2_n\">";
                        // line 241
                        echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "apellidop", array()), "html", null, true);
                        echo " </td>

                                    <td class=\"fila_2_n\">";
                        // line 243
                        echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "apellidom", array()), "html", null, true);
                        echo "</td>

                                    <td class=\"fila_2_n\">";
                        // line 245
                        echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "nombre", array()), "html", null, true);
                        echo "</td>
                            
                                    <td class=\"\">
                                        <a href=\"";
                        // line 248
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("alumno", array("id" => $this->getAttribute($context["result"], "idalumno", array()))), "html", null, true);
                        echo "\">
                                            <img src=\"";
                        // line 249
                        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("imagenes/icon-lupa.png"), "html", null, true);
                        echo "\" width=\"20\" height=\"20\"/> 
                                        </a>    
                                    </td>
                                </tr>

                            ";
                    }
                    // line 255
                    echo "
                        ";
                }
                // line 257
                echo "
                         ";
                // line 258
                if (((isset($context["vence"]) ? $context["vence"] : $this->getContext($context, "vence")) == "7")) {
                    // line 259
                    echo "
                            ";
                    // line 260
                    if ((twig_date_format_filter($this->env, $this->getAttribute($context["result"], "fechafinal", array()), "m") == twig_date_format_filter($this->env, "+1 month", "m"))) {
                        // line 261
                        echo "                            
                                <tr>
                                    <td class=\"fila_2_n\">";
                        // line 263
                        echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "apellidop", array()), "html", null, true);
                        echo " </td>

                                    <td class=\"fila_2_n\">";
                        // line 265
                        echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "apellidom", array()), "html", null, true);
                        echo "</td>

                                    <td class=\"fila_2_n\">";
                        // line 267
                        echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "nombre", array()), "html", null, true);
                        echo "</td>
                            
                                    <td class=\"\">
                                        <a href=\"";
                        // line 270
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("alumno", array("id" => $this->getAttribute($context["result"], "idalumno", array()))), "html", null, true);
                        echo "\">
                                            <img src=\"";
                        // line 271
                        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("imagenes/icon-lupa.png"), "html", null, true);
                        echo "\" width=\"20\" height=\"20\"/> 
                                        </a>    
                                    </td>
                                </tr>

                            ";
                    }
                    // line 277
                    echo "
                        ";
                }
                // line 279
                echo "
                         ";
                // line 280
                if (((isset($context["vence"]) ? $context["vence"] : $this->getContext($context, "vence")) == "8")) {
                    // line 281
                    echo "
                            ";
                    // line 282
                    if ((twig_date_format_filter($this->env, $this->getAttribute($context["result"], "fechafinal", array()), "m") == twig_date_format_filter($this->env, "+2 month", "m"))) {
                        // line 283
                        echo "                            
                                <tr>
                                    <td class=\"fila_2_n\">";
                        // line 285
                        echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "apellidop", array()), "html", null, true);
                        echo " </td>

                                    <td class=\"fila_2_n\">";
                        // line 287
                        echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "apellidom", array()), "html", null, true);
                        echo "</td>

                                    <td class=\"fila_2_n\">";
                        // line 289
                        echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "nombre", array()), "html", null, true);
                        echo "</td>
                            
                                    <td class=\"\">
                                        <a href=\"";
                        // line 292
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("alumno", array("id" => $this->getAttribute($context["result"], "idalumno", array()))), "html", null, true);
                        echo "\">
                                            <img src=\"";
                        // line 293
                        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("imagenes/icon-lupa.png"), "html", null, true);
                        echo "\" width=\"20\" height=\"20\"/> 
                                        </a>    
                                    </td>
                                </tr>

                            ";
                    }
                    // line 299
                    echo "
                        ";
                }
                // line 301
                echo "
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['result'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 303
            echo "                </tbody>
            </table>
            </div>

            <div class=\"correos col-md-8\">

                ";
            // line 309
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["resultado"]) ? $context["resultado"] : $this->getContext($context, "resultado")));
            foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
                // line 310
                echo "
                        ";
                // line 311
                if (((isset($context["vence"]) ? $context["vence"] : $this->getContext($context, "vence")) == "todos")) {
                    // line 312
                    echo "                            ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "email", array()), "html", null, true);
                    echo ",
                        ";
                }
                // line 314
                echo "

                        ";
                // line 316
                if (((isset($context["vence"]) ? $context["vence"] : $this->getContext($context, "vence")) == "activos")) {
                    // line 317
                    echo "                            ";
                    if ((twig_date_converter($this->env, $this->getAttribute($context["result"], "fechafinal", array())) > twig_date_converter($this->env))) {
                        // line 318
                        echo "                                ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "email", array()), "html", null, true);
                        echo ",
                            ";
                    }
                    // line 320
                    echo "                        ";
                }
                // line 321
                echo "

                        ";
                // line 323
                if (((isset($context["vence"]) ? $context["vence"] : $this->getContext($context, "vence")) == "vencidos")) {
                    // line 324
                    echo "                            ";
                    if ((twig_date_converter($this->env, $this->getAttribute($context["result"], "fechafinal", array())) < twig_date_converter($this->env))) {
                        // line 325
                        echo "                                ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "email", array()), "html", null, true);
                        echo ",
                            ";
                    }
                    // line 327
                    echo "                        ";
                }
                // line 328
                echo "

                        ";
                // line 330
                if (((isset($context["vence"]) ? $context["vence"] : $this->getContext($context, "vence")) == "5")) {
                    // line 331
                    echo "                            ";
                    if ((twig_date_converter($this->env, $this->getAttribute($context["result"], "fechafinal", array())) < twig_date_converter($this->env, "+5days"))) {
                        // line 332
                        echo "                                ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "email", array()), "html", null, true);
                        echo ",
                            ";
                    }
                    // line 334
                    echo "                        ";
                }
                // line 335
                echo "

                        ";
                // line 337
                if (((isset($context["vence"]) ? $context["vence"] : $this->getContext($context, "vence")) == "10")) {
                    // line 338
                    echo "                            ";
                    if ((twig_date_converter($this->env, $this->getAttribute($context["result"], "fechafinal", array())) < twig_date_converter($this->env, "+10days"))) {
                        // line 339
                        echo "                               ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "email", array()), "html", null, true);
                        echo ",
                            ";
                    }
                    // line 341
                    echo "                        ";
                }
                // line 342
                echo "

                        ";
                // line 344
                if (((isset($context["vence"]) ? $context["vence"] : $this->getContext($context, "vence")) == "20")) {
                    // line 345
                    echo "                            ";
                    if ((twig_date_converter($this->env, $this->getAttribute($context["result"], "fechafinal", array())) < twig_date_converter($this->env, "+20days"))) {
                        // line 346
                        echo "                               ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "email", array()), "html", null, true);
                        echo ",
                            ";
                    }
                    // line 348
                    echo "                        ";
                }
                // line 349
                echo "
                        ";
                // line 350
                if (((isset($context["vence"]) ? $context["vence"] : $this->getContext($context, "vence")) == "6")) {
                    // line 351
                    echo "                            ";
                    if ((twig_date_format_filter($this->env, $this->getAttribute($context["result"], "fechafinal", array()), "m") == twig_date_format_filter($this->env, "now", "m"))) {
                        // line 352
                        echo "                                ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "email", array()), "html", null, true);
                        echo ",
                            ";
                    }
                    // line 354
                    echo "                        ";
                }
                // line 355
                echo "

                        ";
                // line 357
                if (((isset($context["vence"]) ? $context["vence"] : $this->getContext($context, "vence")) == "7")) {
                    // line 358
                    echo "                            ";
                    if ((twig_date_format_filter($this->env, $this->getAttribute($context["result"], "fechafinal", array()), "m") == twig_date_format_filter($this->env, "+1 month", "m"))) {
                        // line 359
                        echo "                                ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "email", array()), "html", null, true);
                        echo ",
                            ";
                    }
                    // line 361
                    echo "                        ";
                }
                // line 362
                echo "
                        ";
                // line 363
                if (((isset($context["vence"]) ? $context["vence"] : $this->getContext($context, "vence")) == "8")) {
                    // line 364
                    echo "                            ";
                    if ((twig_date_format_filter($this->env, $this->getAttribute($context["result"], "fechafinal", array()), "m") == twig_date_format_filter($this->env, "+2 month", "m"))) {
                        // line 365
                        echo "                                ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "email", array()), "html", null, true);
                        echo ",
                            ";
                    }
                    // line 367
                    echo "                        ";
                }
                // line 368
                echo "
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['result'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 370
            echo "
            </div>

            ";
        }
        // line 374
        echo "
        </div>
        
    </div>
</div>

</body>


</html>";
        
        $__internal_b9cd32615a00e15efd2b56f9627ecc63e172f6309cbd4240d2c292877f227eb3->leave($__internal_b9cd32615a00e15efd2b56f9627ecc63e172f6309cbd4240d2c292877f227eb3_prof);

    }

    public function getTemplateName()
    {
        return "PfaSistemaBundle::filtro.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  809 => 374,  803 => 370,  796 => 368,  793 => 367,  787 => 365,  784 => 364,  782 => 363,  779 => 362,  776 => 361,  770 => 359,  767 => 358,  765 => 357,  761 => 355,  758 => 354,  752 => 352,  749 => 351,  747 => 350,  744 => 349,  741 => 348,  735 => 346,  732 => 345,  730 => 344,  726 => 342,  723 => 341,  717 => 339,  714 => 338,  712 => 337,  708 => 335,  705 => 334,  699 => 332,  696 => 331,  694 => 330,  690 => 328,  687 => 327,  681 => 325,  678 => 324,  676 => 323,  672 => 321,  669 => 320,  663 => 318,  660 => 317,  658 => 316,  654 => 314,  648 => 312,  646 => 311,  643 => 310,  639 => 309,  631 => 303,  624 => 301,  620 => 299,  611 => 293,  607 => 292,  601 => 289,  596 => 287,  591 => 285,  587 => 283,  585 => 282,  582 => 281,  580 => 280,  577 => 279,  573 => 277,  564 => 271,  560 => 270,  554 => 267,  549 => 265,  544 => 263,  540 => 261,  538 => 260,  535 => 259,  533 => 258,  530 => 257,  526 => 255,  517 => 249,  513 => 248,  507 => 245,  502 => 243,  497 => 241,  493 => 239,  491 => 238,  488 => 237,  486 => 236,  483 => 235,  479 => 233,  470 => 227,  466 => 226,  460 => 223,  455 => 221,  450 => 219,  447 => 218,  445 => 217,  442 => 216,  440 => 215,  437 => 214,  433 => 212,  424 => 206,  420 => 205,  414 => 202,  409 => 200,  404 => 198,  401 => 197,  399 => 196,  396 => 195,  394 => 194,  391 => 193,  387 => 191,  378 => 185,  374 => 184,  368 => 181,  363 => 179,  358 => 177,  355 => 176,  353 => 175,  350 => 174,  348 => 173,  345 => 172,  341 => 170,  332 => 164,  328 => 163,  322 => 160,  317 => 158,  312 => 156,  309 => 155,  307 => 154,  304 => 153,  302 => 152,  299 => 151,  295 => 149,  286 => 143,  282 => 142,  276 => 139,  271 => 137,  266 => 135,  263 => 134,  261 => 133,  258 => 132,  256 => 131,  253 => 130,  244 => 124,  240 => 123,  234 => 120,  229 => 118,  224 => 116,  221 => 115,  219 => 114,  216 => 113,  212 => 112,  199 => 101,  195 => 99,  193 => 98,  188 => 96,  181 => 92,  173 => 87,  167 => 84,  158 => 78,  152 => 75,  143 => 69,  137 => 66,  128 => 60,  122 => 57,  115 => 53,  104 => 45,  99 => 43,  92 => 39,  87 => 37,  82 => 35,  68 => 24,  63 => 22,  52 => 14,  47 => 12,  43 => 11,  38 => 9,  34 => 8,  30 => 7,  22 => 1,);
    }
}
