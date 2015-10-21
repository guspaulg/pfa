<?php

/* PfaSistemaBundle::ingresos.html.twig */
class __TwigTemplate_aabb1292632025e0e80a6a313e4a6db7003ba294a04fae7c33db2864302a339c extends Twig_Template
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
        $__internal_09dca95982520809db55666d767327546f3b2c76e6d289f0e43b08849c22eea6 = $this->env->getExtension("native_profiler");
        $__internal_09dca95982520809db55666d767327546f3b2c76e6d289f0e43b08849c22eea6->enter($__internal_09dca95982520809db55666d767327546f3b2c76e6d289f0e43b08849c22eea6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PfaSistemaBundle::ingresos.html.twig"));

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

            <li ><a href=\"";
        // line 39
        echo $this->env->getExtension('routing')->getPath("buscar", array("buscar" => ""));
        echo "\">Buscar</a></li>

            <li><a href=\"";
        // line 41
        echo $this->env->getExtension('routing')->getPath("filtrar", array("filtrar" => ""));
        echo "\">Filtrar</a></li>

            <li><a href=\"";
        // line 43
        echo $this->env->getExtension('routing')->getPath("agentes", array("slug" => ""));
        echo "\">Agentes</a></li>   

            <li class=\"active\"><a href=\"#\">Ingresos</a></li>

          </ul>
        
        </div>

        <div class=\"col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main\">

            ";
        // line 53
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
   
            ";
        // line 55
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "



          ";
        // line 59
        $context["matHombres"] = 0;
        // line 60
        echo "          ";
        $context["matMujeres"] = 0;
        // line 61
        echo "          ";
        $context["matReno"] = 0;
        // line 62
        echo "          ";
        $context["montoHombres"] = 0;
        // line 63
        echo "          ";
        $context["montoMujeres"] = 0;
        // line 64
        echo "          ";
        $context["montoReno"] = 0;
        // line 65
        echo "          ";
        $context["ingreso1"] = 0;
        // line 66
        echo "
          ";
        // line 67
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["muay"]) ? $context["muay"] : $this->getContext($context, "muay")));
        foreach ($context['_seq'] as $context["_key"] => $context["muay1"]) {
            // line 68
            echo "                ";
            if (($this->getAttribute($context["muay1"], "fechainicio", array()) >= (isset($context["fechai"]) ? $context["fechai"] : $this->getContext($context, "fechai")))) {
                // line 69
                echo "                    ";
                if (($this->getAttribute($context["muay1"], "fechainicio", array()) <= (isset($context["fechaf"]) ? $context["fechaf"] : $this->getContext($context, "fechaf")))) {
                    // line 70
                    echo "

                            ";
                    // line 72
                    if (($this->getAttribute($context["muay1"], "sexo", array()) == 1)) {
                        // line 73
                        echo "
                                  ";
                        // line 74
                        $context["matMujeres"] = (1 + (isset($context["matMujeres"]) ? $context["matMujeres"] : $this->getContext($context, "matMujeres")));
                        // line 75
                        echo "                                  ";
                        $context["montoMujeres"] = ($this->getAttribute($context["muay1"], "precio", array()) + (isset($context["montoMujeres"]) ? $context["montoMujeres"] : $this->getContext($context, "montoMujeres")));
                        // line 76
                        echo "                                  ";
                        $context["ingreso1"] = ($this->getAttribute($context["muay1"], "precio", array()) + (isset($context["ingreso1"]) ? $context["ingreso1"] : $this->getContext($context, "ingreso1")));
                        echo "  

                            ";
                    }
                    // line 79
                    echo "
                            ";
                    // line 80
                    if (($this->getAttribute($context["muay1"], "sexo", array()) == 2)) {
                        // line 81
                        echo "
                                  ";
                        // line 82
                        $context["matHombres"] = (1 + (isset($context["matHombres"]) ? $context["matHombres"] : $this->getContext($context, "matHombres")));
                        // line 83
                        echo "                                  ";
                        $context["montoHombres"] = ($this->getAttribute($context["muay1"], "precio", array()) + (isset($context["montoHombres"]) ? $context["montoHombres"] : $this->getContext($context, "montoHombres")));
                        // line 84
                        echo "                                  ";
                        $context["ingreso1"] = ($this->getAttribute($context["muay1"], "precio", array()) + (isset($context["ingreso1"]) ? $context["ingreso1"] : $this->getContext($context, "ingreso1")));
                        echo "  

                            ";
                    }
                    // line 86
                    echo "     

                            ";
                    // line 88
                    if (($this->getAttribute($context["muay1"], "sexo", array()) == 3)) {
                        // line 89
                        echo "
                                  ";
                        // line 90
                        $context["matReno"] = (1 + (isset($context["matReno"]) ? $context["matReno"] : $this->getContext($context, "matReno")));
                        // line 91
                        echo "                                  ";
                        $context["montoReno"] = ($this->getAttribute($context["muay1"], "precio", array()) + (isset($context["montoReno"]) ? $context["montoReno"] : $this->getContext($context, "montoReno")));
                        // line 92
                        echo "                                  ";
                        $context["ingreso1"] = ($this->getAttribute($context["muay1"], "precio", array()) + (isset($context["ingreso1"]) ? $context["ingreso1"] : $this->getContext($context, "ingreso1")));
                        echo "  

                            ";
                    }
                    // line 94
                    echo "  


                    ";
                }
                // line 98
                echo "                ";
            }
            // line 99
            echo "          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['muay1'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 100
        echo "
            <table class=\"table table-striped\">
                <thead>
                    <tr>
                      <th> </th>
                      <th>Nuev. Matr. V.</th>
                      <th>Nuev. Matr. M.</th>
                      <th>Matr. Renovadas</th>
                      <th>Monto Matr. V.</th>
                      <th>Monto Matr. M.</th>
                      <th>Monto Renovadas</th>
                      <th>Monto Total</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                      <th> Muay thai</th>
                      <th class=\"asul\">";
        // line 117
        echo twig_escape_filter($this->env, (isset($context["matHombres"]) ? $context["matHombres"] : $this->getContext($context, "matHombres")), "html", null, true);
        echo "</th>
                      <th class=\"asul\">";
        // line 118
        echo twig_escape_filter($this->env, (isset($context["matMujeres"]) ? $context["matMujeres"] : $this->getContext($context, "matMujeres")), "html", null, true);
        echo "</th>
                      <th class=\"asul\">";
        // line 119
        echo twig_escape_filter($this->env, (isset($context["matReno"]) ? $context["matReno"] : $this->getContext($context, "matReno")), "html", null, true);
        echo "</th>
                      <th class=\"asul\">S/.";
        // line 120
        echo twig_escape_filter($this->env, (isset($context["montoHombres"]) ? $context["montoHombres"] : $this->getContext($context, "montoHombres")), "html", null, true);
        echo "</th>
                      <th class=\"asul\">S/.";
        // line 121
        echo twig_escape_filter($this->env, (isset($context["montoMujeres"]) ? $context["montoMujeres"] : $this->getContext($context, "montoMujeres")), "html", null, true);
        echo "</th>
                      <th class=\"asul\">S/.";
        // line 122
        echo twig_escape_filter($this->env, (isset($context["montoReno"]) ? $context["montoReno"] : $this->getContext($context, "montoReno")), "html", null, true);
        echo "</th>
                      <th class=\"asul\">S/.";
        // line 123
        echo twig_escape_filter($this->env, (isset($context["ingreso1"]) ? $context["ingreso1"] : $this->getContext($context, "ingreso1")), "html", null, true);
        echo "</th>
                    </tr>
                
";
        // line 127
        echo "
          ";
        // line 128
        $context["matHombres"] = 0;
        // line 129
        echo "          ";
        $context["matMujeres"] = 0;
        // line 130
        echo "          ";
        $context["matReno"] = 0;
        // line 131
        echo "          ";
        $context["montoHombres"] = 0;
        // line 132
        echo "          ";
        $context["montoMujeres"] = 0;
        // line 133
        echo "          ";
        $context["montoReno"] = 0;
        // line 134
        echo "          ";
        $context["ingreso2"] = 0;
        // line 135
        echo "
          ";
        // line 136
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["jiu"]) ? $context["jiu"] : $this->getContext($context, "jiu")));
        foreach ($context['_seq'] as $context["_key"] => $context["jiu1"]) {
            // line 137
            echo "                ";
            if (($this->getAttribute($context["jiu1"], "fechainicio", array()) >= (isset($context["fechai"]) ? $context["fechai"] : $this->getContext($context, "fechai")))) {
                // line 138
                echo "                    ";
                if (($this->getAttribute($context["jiu1"], "fechainicio", array()) <= (isset($context["fechaf"]) ? $context["fechaf"] : $this->getContext($context, "fechaf")))) {
                    // line 139
                    echo "

                            ";
                    // line 141
                    if (($this->getAttribute($context["jiu1"], "sexo", array()) == 1)) {
                        // line 142
                        echo "
                                  ";
                        // line 143
                        $context["matMujeres"] = (1 + (isset($context["matMujeres"]) ? $context["matMujeres"] : $this->getContext($context, "matMujeres")));
                        // line 144
                        echo "                                  ";
                        $context["montoMujeres"] = ($this->getAttribute($context["jiu1"], "precio", array()) + (isset($context["montoMujeres"]) ? $context["montoMujeres"] : $this->getContext($context, "montoMujeres")));
                        // line 145
                        echo "                                  ";
                        $context["ingreso2"] = ($this->getAttribute($context["jiu1"], "precio", array()) + (isset($context["ingreso2"]) ? $context["ingreso2"] : $this->getContext($context, "ingreso2")));
                        echo "  

                            ";
                    }
                    // line 148
                    echo "
                            ";
                    // line 149
                    if (($this->getAttribute($context["jiu1"], "sexo", array()) == 2)) {
                        // line 150
                        echo "
                                  ";
                        // line 151
                        $context["matHombres"] = (1 + (isset($context["matHombres"]) ? $context["matHombres"] : $this->getContext($context, "matHombres")));
                        // line 152
                        echo "                                  ";
                        $context["montoHombres"] = ($this->getAttribute($context["jiu1"], "precio", array()) + (isset($context["montoHombres"]) ? $context["montoHombres"] : $this->getContext($context, "montoHombres")));
                        // line 153
                        echo "                                  ";
                        $context["ingreso2"] = ($this->getAttribute($context["jiu1"], "precio", array()) + (isset($context["ingreso2"]) ? $context["ingreso2"] : $this->getContext($context, "ingreso2")));
                        echo "  

                            ";
                    }
                    // line 155
                    echo "     

                            ";
                    // line 157
                    if (($this->getAttribute($context["jiu1"], "sexo", array()) == 3)) {
                        // line 158
                        echo "
                                  ";
                        // line 159
                        $context["matReno"] = (1 + (isset($context["matReno"]) ? $context["matReno"] : $this->getContext($context, "matReno")));
                        // line 160
                        echo "                                  ";
                        $context["montoReno"] = ($this->getAttribute($context["jiu1"], "precio", array()) + (isset($context["montoReno"]) ? $context["montoReno"] : $this->getContext($context, "montoReno")));
                        // line 161
                        echo "                                  ";
                        $context["ingreso2"] = ($this->getAttribute($context["jiu1"], "precio", array()) + (isset($context["ingreso2"]) ? $context["ingreso2"] : $this->getContext($context, "ingreso2")));
                        echo "  

                            ";
                    }
                    // line 163
                    echo "  


                    ";
                }
                // line 167
                echo "                ";
            }
            // line 168
            echo "          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['jiu1'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 169
        echo "

                    <tr>
                      <th> Jiu Jitsu</th>
                      <th class=\"asul\">";
        // line 173
        echo twig_escape_filter($this->env, (isset($context["matHombres"]) ? $context["matHombres"] : $this->getContext($context, "matHombres")), "html", null, true);
        echo "</th>
                      <th class=\"asul\">";
        // line 174
        echo twig_escape_filter($this->env, (isset($context["matMujeres"]) ? $context["matMujeres"] : $this->getContext($context, "matMujeres")), "html", null, true);
        echo "</th>
                      <th class=\"asul\">";
        // line 175
        echo twig_escape_filter($this->env, (isset($context["matReno"]) ? $context["matReno"] : $this->getContext($context, "matReno")), "html", null, true);
        echo "</th>
                      <th class=\"asul\">S/.";
        // line 176
        echo twig_escape_filter($this->env, (isset($context["montoHombres"]) ? $context["montoHombres"] : $this->getContext($context, "montoHombres")), "html", null, true);
        echo "</th>
                      <th class=\"asul\">S/.";
        // line 177
        echo twig_escape_filter($this->env, (isset($context["montoMujeres"]) ? $context["montoMujeres"] : $this->getContext($context, "montoMujeres")), "html", null, true);
        echo "</th>
                      <th class=\"asul\">S/.";
        // line 178
        echo twig_escape_filter($this->env, (isset($context["montoReno"]) ? $context["montoReno"] : $this->getContext($context, "montoReno")), "html", null, true);
        echo "</th>
                      <th class=\"asul\">S/.";
        // line 179
        echo twig_escape_filter($this->env, (isset($context["ingreso2"]) ? $context["ingreso2"] : $this->getContext($context, "ingreso2")), "html", null, true);
        echo "</th>
                    </tr>


";
        // line 184
        echo "
          ";
        // line 185
        $context["matHombres"] = 0;
        // line 186
        echo "          ";
        $context["matMujeres"] = 0;
        // line 187
        echo "          ";
        $context["matReno"] = 0;
        // line 188
        echo "          ";
        $context["montoHombres"] = 0;
        // line 189
        echo "          ";
        $context["montoMujeres"] = 0;
        // line 190
        echo "          ";
        $context["montoReno"] = 0;
        // line 191
        echo "          ";
        $context["ingreso3"] = 0;
        // line 192
        echo "
          ";
        // line 193
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["box"]) ? $context["box"] : $this->getContext($context, "box")));
        foreach ($context['_seq'] as $context["_key"] => $context["box1"]) {
            // line 194
            echo "                ";
            if (($this->getAttribute($context["box1"], "fechainicio", array()) >= (isset($context["fechai"]) ? $context["fechai"] : $this->getContext($context, "fechai")))) {
                // line 195
                echo "                    ";
                if (($this->getAttribute($context["box1"], "fechainicio", array()) <= (isset($context["fechaf"]) ? $context["fechaf"] : $this->getContext($context, "fechaf")))) {
                    // line 196
                    echo "

                            ";
                    // line 198
                    if (($this->getAttribute($context["box1"], "sexo", array()) == 1)) {
                        // line 199
                        echo "
                                  ";
                        // line 200
                        $context["matMujeres"] = (1 + (isset($context["matMujeres"]) ? $context["matMujeres"] : $this->getContext($context, "matMujeres")));
                        // line 201
                        echo "                                  ";
                        $context["montoMujeres"] = ($this->getAttribute($context["box1"], "precio", array()) + (isset($context["montoMujeres"]) ? $context["montoMujeres"] : $this->getContext($context, "montoMujeres")));
                        // line 202
                        echo "                                  ";
                        $context["ingreso3"] = ($this->getAttribute($context["box1"], "precio", array()) + (isset($context["ingreso3"]) ? $context["ingreso3"] : $this->getContext($context, "ingreso3")));
                        echo "  

                            ";
                    }
                    // line 205
                    echo "
                            ";
                    // line 206
                    if (($this->getAttribute($context["box1"], "sexo", array()) == 2)) {
                        // line 207
                        echo "
                                  ";
                        // line 208
                        $context["matHombres"] = (1 + (isset($context["matHombres"]) ? $context["matHombres"] : $this->getContext($context, "matHombres")));
                        // line 209
                        echo "                                  ";
                        $context["montoHombres"] = ($this->getAttribute($context["box1"], "precio", array()) + (isset($context["montoHombres"]) ? $context["montoHombres"] : $this->getContext($context, "montoHombres")));
                        // line 210
                        echo "                                  ";
                        $context["ingreso3"] = ($this->getAttribute($context["box1"], "precio", array()) + (isset($context["ingreso3"]) ? $context["ingreso3"] : $this->getContext($context, "ingreso3")));
                        echo "  

                            ";
                    }
                    // line 212
                    echo "     

                            ";
                    // line 214
                    if (($this->getAttribute($context["box1"], "sexo", array()) == 3)) {
                        // line 215
                        echo "
                                  ";
                        // line 216
                        $context["matReno"] = (1 + (isset($context["matReno"]) ? $context["matReno"] : $this->getContext($context, "matReno")));
                        // line 217
                        echo "                                  ";
                        $context["montoReno"] = ($this->getAttribute($context["box1"], "precio", array()) + (isset($context["montoReno"]) ? $context["montoReno"] : $this->getContext($context, "montoReno")));
                        // line 218
                        echo "                                  ";
                        $context["ingreso3"] = ($this->getAttribute($context["box1"], "precio", array()) + (isset($context["ingreso3"]) ? $context["ingreso3"] : $this->getContext($context, "ingreso3")));
                        echo "  

                            ";
                    }
                    // line 220
                    echo "  


                    ";
                }
                // line 224
                echo "                ";
            }
            // line 225
            echo "          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['box1'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 226
        echo "
                    <tr>
                      <th> BoX</th>
                      <th class=\"asul\">";
        // line 229
        echo twig_escape_filter($this->env, (isset($context["matHombres"]) ? $context["matHombres"] : $this->getContext($context, "matHombres")), "html", null, true);
        echo "</th>
                      <th class=\"asul\">";
        // line 230
        echo twig_escape_filter($this->env, (isset($context["matMujeres"]) ? $context["matMujeres"] : $this->getContext($context, "matMujeres")), "html", null, true);
        echo "</th>
                      <th class=\"asul\">";
        // line 231
        echo twig_escape_filter($this->env, (isset($context["matReno"]) ? $context["matReno"] : $this->getContext($context, "matReno")), "html", null, true);
        echo "</th>
                      <th class=\"asul\">S/.";
        // line 232
        echo twig_escape_filter($this->env, (isset($context["montoHombres"]) ? $context["montoHombres"] : $this->getContext($context, "montoHombres")), "html", null, true);
        echo "</th>
                      <th class=\"asul\">S/.";
        // line 233
        echo twig_escape_filter($this->env, (isset($context["montoMujeres"]) ? $context["montoMujeres"] : $this->getContext($context, "montoMujeres")), "html", null, true);
        echo "</th>
                      <th class=\"asul\">S/.";
        // line 234
        echo twig_escape_filter($this->env, (isset($context["montoReno"]) ? $context["montoReno"] : $this->getContext($context, "montoReno")), "html", null, true);
        echo "</th>
                      <th class=\"asul\">S/.";
        // line 235
        echo twig_escape_filter($this->env, (isset($context["ingreso3"]) ? $context["ingreso3"] : $this->getContext($context, "ingreso3")), "html", null, true);
        echo "</th>
                    </tr>

";
        // line 239
        echo "
          ";
        // line 240
        $context["matHombres"] = 0;
        // line 241
        echo "          ";
        $context["matMujeres"] = 0;
        // line 242
        echo "          ";
        $context["matReno"] = 0;
        // line 243
        echo "          ";
        $context["montoHombres"] = 0;
        // line 244
        echo "          ";
        $context["montoMujeres"] = 0;
        // line 245
        echo "          ";
        $context["montoReno"] = 0;
        // line 246
        echo "          ";
        $context["ingreso4"] = 0;
        // line 247
        echo "
          ";
        // line 248
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["mma"]) ? $context["mma"] : $this->getContext($context, "mma")));
        foreach ($context['_seq'] as $context["_key"] => $context["mma1"]) {
            // line 249
            echo "                ";
            if (($this->getAttribute($context["mma1"], "fechainicio", array()) >= (isset($context["fechai"]) ? $context["fechai"] : $this->getContext($context, "fechai")))) {
                // line 250
                echo "                    ";
                if (($this->getAttribute($context["mma1"], "fechainicio", array()) <= (isset($context["fechaf"]) ? $context["fechaf"] : $this->getContext($context, "fechaf")))) {
                    // line 251
                    echo "

                            ";
                    // line 253
                    if (($this->getAttribute($context["mma1"], "sexo", array()) == 1)) {
                        // line 254
                        echo "
                                  ";
                        // line 255
                        $context["matMujeres"] = (1 + (isset($context["matMujeres"]) ? $context["matMujeres"] : $this->getContext($context, "matMujeres")));
                        // line 256
                        echo "                                  ";
                        $context["montoMujeres"] = ($this->getAttribute($context["mma1"], "precio", array()) + (isset($context["montoMujeres"]) ? $context["montoMujeres"] : $this->getContext($context, "montoMujeres")));
                        // line 257
                        echo "                                  ";
                        $context["ingreso4"] = ($this->getAttribute($context["mma1"], "precio", array()) + (isset($context["ingreso4"]) ? $context["ingreso4"] : $this->getContext($context, "ingreso4")));
                        echo "  

                            ";
                    }
                    // line 260
                    echo "
                            ";
                    // line 261
                    if (($this->getAttribute($context["mma1"], "sexo", array()) == 2)) {
                        // line 262
                        echo "
                                  ";
                        // line 263
                        $context["matHombres"] = (1 + (isset($context["matHombres"]) ? $context["matHombres"] : $this->getContext($context, "matHombres")));
                        // line 264
                        echo "                                  ";
                        $context["montoHombres"] = ($this->getAttribute($context["mma1"], "precio", array()) + (isset($context["montoHombres"]) ? $context["montoHombres"] : $this->getContext($context, "montoHombres")));
                        // line 265
                        echo "                                  ";
                        $context["ingreso4"] = ($this->getAttribute($context["mma1"], "precio", array()) + (isset($context["ingreso4"]) ? $context["ingreso4"] : $this->getContext($context, "ingreso4")));
                        echo "  

                            ";
                    }
                    // line 267
                    echo "     

                            ";
                    // line 269
                    if (($this->getAttribute($context["mma1"], "sexo", array()) == 3)) {
                        // line 270
                        echo "
                                  ";
                        // line 271
                        $context["matReno"] = (1 + (isset($context["matReno"]) ? $context["matReno"] : $this->getContext($context, "matReno")));
                        // line 272
                        echo "                                  ";
                        $context["montoReno"] = ($this->getAttribute($context["mma1"], "precio", array()) + (isset($context["montoReno"]) ? $context["montoReno"] : $this->getContext($context, "montoReno")));
                        // line 273
                        echo "                                  ";
                        $context["ingreso4"] = ($this->getAttribute($context["mma1"], "precio", array()) + (isset($context["ingreso4"]) ? $context["ingreso4"] : $this->getContext($context, "ingreso4")));
                        echo "  

                            ";
                    }
                    // line 275
                    echo "  


                    ";
                }
                // line 279
                echo "                ";
            }
            // line 280
            echo "          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mma1'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 281
        echo "

                    <tr>
                      <th> Mma</th>
                      <th class=\"asul\">";
        // line 285
        echo twig_escape_filter($this->env, (isset($context["matHombres"]) ? $context["matHombres"] : $this->getContext($context, "matHombres")), "html", null, true);
        echo "</th>
                      <th class=\"asul\">";
        // line 286
        echo twig_escape_filter($this->env, (isset($context["matMujeres"]) ? $context["matMujeres"] : $this->getContext($context, "matMujeres")), "html", null, true);
        echo "</th>
                      <th class=\"asul\">";
        // line 287
        echo twig_escape_filter($this->env, (isset($context["matReno"]) ? $context["matReno"] : $this->getContext($context, "matReno")), "html", null, true);
        echo "</th>
                      <th class=\"asul\">S/.";
        // line 288
        echo twig_escape_filter($this->env, (isset($context["montoHombres"]) ? $context["montoHombres"] : $this->getContext($context, "montoHombres")), "html", null, true);
        echo "</th>
                      <th class=\"asul\">S/.";
        // line 289
        echo twig_escape_filter($this->env, (isset($context["montoMujeres"]) ? $context["montoMujeres"] : $this->getContext($context, "montoMujeres")), "html", null, true);
        echo "</th>
                      <th class=\"asul\">S/.";
        // line 290
        echo twig_escape_filter($this->env, (isset($context["montoReno"]) ? $context["montoReno"] : $this->getContext($context, "montoReno")), "html", null, true);
        echo "</th>
                      <th class=\"asul\">S/.";
        // line 291
        echo twig_escape_filter($this->env, (isset($context["ingreso4"]) ? $context["ingreso4"] : $this->getContext($context, "ingreso4")), "html", null, true);
        echo "</th>
                    </tr>


";
        // line 296
        echo "
          ";
        // line 297
        $context["matHombres"] = 0;
        // line 298
        echo "          ";
        $context["matMujeres"] = 0;
        // line 299
        echo "          ";
        $context["matReno"] = 0;
        // line 300
        echo "          ";
        $context["montoHombres"] = 0;
        // line 301
        echo "          ";
        $context["montoMujeres"] = 0;
        // line 302
        echo "          ";
        $context["montoReno"] = 0;
        // line 303
        echo "          ";
        $context["ingreso5"] = 0;
        // line 304
        echo "
          ";
        // line 305
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["yoga"]) ? $context["yoga"] : $this->getContext($context, "yoga")));
        foreach ($context['_seq'] as $context["_key"] => $context["yoga1"]) {
            // line 306
            echo "                ";
            if (($this->getAttribute($context["yoga1"], "fechainicio", array()) >= (isset($context["fechai"]) ? $context["fechai"] : $this->getContext($context, "fechai")))) {
                // line 307
                echo "                    ";
                if (($this->getAttribute($context["yoga1"], "fechainicio", array()) <= (isset($context["fechaf"]) ? $context["fechaf"] : $this->getContext($context, "fechaf")))) {
                    // line 308
                    echo "

                            ";
                    // line 310
                    if (($this->getAttribute($context["yoga1"], "sexo", array()) == 1)) {
                        // line 311
                        echo "
                                  ";
                        // line 312
                        $context["matMujeres"] = (1 + (isset($context["matMujeres"]) ? $context["matMujeres"] : $this->getContext($context, "matMujeres")));
                        // line 313
                        echo "                                  ";
                        $context["montoMujeres"] = ($this->getAttribute($context["yoga1"], "precio", array()) + (isset($context["montoMujeres"]) ? $context["montoMujeres"] : $this->getContext($context, "montoMujeres")));
                        // line 314
                        echo "                                  ";
                        $context["ingreso5"] = ($this->getAttribute($context["yoga1"], "precio", array()) + (isset($context["ingreso5"]) ? $context["ingreso5"] : $this->getContext($context, "ingreso5")));
                        echo "  

                            ";
                    }
                    // line 317
                    echo "
                            ";
                    // line 318
                    if (($this->getAttribute($context["yoga1"], "sexo", array()) == 2)) {
                        // line 319
                        echo "
                                  ";
                        // line 320
                        $context["matHombres"] = (1 + (isset($context["matHombres"]) ? $context["matHombres"] : $this->getContext($context, "matHombres")));
                        // line 321
                        echo "                                  ";
                        $context["montoHombres"] = ($this->getAttribute($context["yoga1"], "precio", array()) + (isset($context["montoHombres"]) ? $context["montoHombres"] : $this->getContext($context, "montoHombres")));
                        // line 322
                        echo "                                  ";
                        $context["ingreso5"] = ($this->getAttribute($context["yoga1"], "precio", array()) + (isset($context["ingreso5"]) ? $context["ingreso5"] : $this->getContext($context, "ingreso5")));
                        echo "  

                            ";
                    }
                    // line 324
                    echo "     

                            ";
                    // line 326
                    if (($this->getAttribute($context["yoga1"], "sexo", array()) == 3)) {
                        // line 327
                        echo "
                                  ";
                        // line 328
                        $context["matReno"] = (1 + (isset($context["matReno"]) ? $context["matReno"] : $this->getContext($context, "matReno")));
                        // line 329
                        echo "                                  ";
                        $context["montoReno"] = ($this->getAttribute($context["yoga1"], "precio", array()) + (isset($context["montoReno"]) ? $context["montoReno"] : $this->getContext($context, "montoReno")));
                        // line 330
                        echo "                                  ";
                        $context["ingreso5"] = ($this->getAttribute($context["yoga1"], "precio", array()) + (isset($context["ingreso5"]) ? $context["ingreso5"] : $this->getContext($context, "ingreso5")));
                        echo "  

                            ";
                    }
                    // line 332
                    echo "  


                    ";
                }
                // line 336
                echo "                ";
            }
            // line 337
            echo "          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['yoga1'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 338
        echo "

                    <tr>
                      <th> Yoga</th>
                      <th class=\"asul\">";
        // line 342
        echo twig_escape_filter($this->env, (isset($context["matHombres"]) ? $context["matHombres"] : $this->getContext($context, "matHombres")), "html", null, true);
        echo "</th>
                      <th class=\"asul\">";
        // line 343
        echo twig_escape_filter($this->env, (isset($context["matMujeres"]) ? $context["matMujeres"] : $this->getContext($context, "matMujeres")), "html", null, true);
        echo "</th>
                      <th class=\"asul\">";
        // line 344
        echo twig_escape_filter($this->env, (isset($context["matReno"]) ? $context["matReno"] : $this->getContext($context, "matReno")), "html", null, true);
        echo "</th>
                      <th class=\"asul\">S/.";
        // line 345
        echo twig_escape_filter($this->env, (isset($context["montoHombres"]) ? $context["montoHombres"] : $this->getContext($context, "montoHombres")), "html", null, true);
        echo "</th>
                      <th class=\"asul\">S/.";
        // line 346
        echo twig_escape_filter($this->env, (isset($context["montoMujeres"]) ? $context["montoMujeres"] : $this->getContext($context, "montoMujeres")), "html", null, true);
        echo "</th>
                      <th class=\"asul\">S/.";
        // line 347
        echo twig_escape_filter($this->env, (isset($context["montoReno"]) ? $context["montoReno"] : $this->getContext($context, "montoReno")), "html", null, true);
        echo "</th>
                      <th class=\"asul\">S/.";
        // line 348
        echo twig_escape_filter($this->env, (isset($context["ingreso5"]) ? $context["ingreso5"] : $this->getContext($context, "ingreso5")), "html", null, true);
        echo "</th>
                    </tr>



";
        // line 354
        echo "

          ";
        // line 356
        $context["matHombres"] = 0;
        // line 357
        echo "          ";
        $context["matMujeres"] = 0;
        // line 358
        echo "          ";
        $context["matReno"] = 0;
        // line 359
        echo "          ";
        $context["montoHombres"] = 0;
        // line 360
        echo "          ";
        $context["montoMujeres"] = 0;
        // line 361
        echo "          ";
        $context["montoReno"] = 0;
        // line 362
        echo "          ";
        $context["ingreso6"] = 0;
        // line 363
        echo "
          ";
        // line 364
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entre"]) ? $context["entre"] : $this->getContext($context, "entre")));
        foreach ($context['_seq'] as $context["_key"] => $context["entre1"]) {
            // line 365
            echo "                ";
            if (($this->getAttribute($context["entre1"], "fechainicio", array()) >= (isset($context["fechai"]) ? $context["fechai"] : $this->getContext($context, "fechai")))) {
                // line 366
                echo "                    ";
                if (($this->getAttribute($context["entre1"], "fechainicio", array()) <= (isset($context["fechaf"]) ? $context["fechaf"] : $this->getContext($context, "fechaf")))) {
                    // line 367
                    echo "

                            ";
                    // line 369
                    if (($this->getAttribute($context["entre1"], "sexo", array()) == 1)) {
                        // line 370
                        echo "
                                  ";
                        // line 371
                        $context["matMujeres"] = (1 + (isset($context["matMujeres"]) ? $context["matMujeres"] : $this->getContext($context, "matMujeres")));
                        // line 372
                        echo "                                  ";
                        $context["montoMujeres"] = ($this->getAttribute($context["entre1"], "precio", array()) + (isset($context["montoMujeres"]) ? $context["montoMujeres"] : $this->getContext($context, "montoMujeres")));
                        // line 373
                        echo "                                  ";
                        $context["ingreso6"] = ($this->getAttribute($context["entre1"], "precio", array()) + (isset($context["ingreso6"]) ? $context["ingreso6"] : $this->getContext($context, "ingreso6")));
                        echo "  

                            ";
                    }
                    // line 376
                    echo "
                            ";
                    // line 377
                    if (($this->getAttribute($context["entre1"], "sexo", array()) == 2)) {
                        // line 378
                        echo "
                                  ";
                        // line 379
                        $context["matHombres"] = (1 + (isset($context["matHombres"]) ? $context["matHombres"] : $this->getContext($context, "matHombres")));
                        // line 380
                        echo "                                  ";
                        $context["montoHombres"] = ($this->getAttribute($context["entre1"], "precio", array()) + (isset($context["montoHombres"]) ? $context["montoHombres"] : $this->getContext($context, "montoHombres")));
                        // line 381
                        echo "                                  ";
                        $context["ingreso6"] = ($this->getAttribute($context["entre1"], "precio", array()) + (isset($context["ingreso6"]) ? $context["ingreso6"] : $this->getContext($context, "ingreso6")));
                        echo "  

                            ";
                    }
                    // line 383
                    echo "     

                            ";
                    // line 385
                    if (($this->getAttribute($context["entre1"], "sexo", array()) == 3)) {
                        // line 386
                        echo "
                                  ";
                        // line 387
                        $context["matReno"] = (1 + (isset($context["matReno"]) ? $context["matReno"] : $this->getContext($context, "matReno")));
                        // line 388
                        echo "                                  ";
                        $context["montoReno"] = ($this->getAttribute($context["entre1"], "precio", array()) + (isset($context["montoReno"]) ? $context["montoReno"] : $this->getContext($context, "montoReno")));
                        // line 389
                        echo "                                  ";
                        $context["ingreso6"] = ($this->getAttribute($context["entre1"], "precio", array()) + (isset($context["ingreso6"]) ? $context["ingreso6"] : $this->getContext($context, "ingreso6")));
                        echo "  

                            ";
                    }
                    // line 391
                    echo "  


                    ";
                }
                // line 395
                echo "                ";
            }
            // line 396
            echo "          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entre1'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 397
        echo "

                    <tr>
                      <th> Entren Funcional</th>
                      <th class=\"asul\">";
        // line 401
        echo twig_escape_filter($this->env, (isset($context["matHombres"]) ? $context["matHombres"] : $this->getContext($context, "matHombres")), "html", null, true);
        echo "</th>
                      <th class=\"asul\">";
        // line 402
        echo twig_escape_filter($this->env, (isset($context["matMujeres"]) ? $context["matMujeres"] : $this->getContext($context, "matMujeres")), "html", null, true);
        echo "</th>
                      <th class=\"asul\">";
        // line 403
        echo twig_escape_filter($this->env, (isset($context["matReno"]) ? $context["matReno"] : $this->getContext($context, "matReno")), "html", null, true);
        echo "</th>
                      <th class=\"asul\">S/.";
        // line 404
        echo twig_escape_filter($this->env, (isset($context["montoHombres"]) ? $context["montoHombres"] : $this->getContext($context, "montoHombres")), "html", null, true);
        echo "</th>
                      <th class=\"asul\">S/.";
        // line 405
        echo twig_escape_filter($this->env, (isset($context["montoMujeres"]) ? $context["montoMujeres"] : $this->getContext($context, "montoMujeres")), "html", null, true);
        echo "</th>
                      <th class=\"asul\">S/.";
        // line 406
        echo twig_escape_filter($this->env, (isset($context["montoReno"]) ? $context["montoReno"] : $this->getContext($context, "montoReno")), "html", null, true);
        echo "</th>
                      <th class=\"asul\">S/.";
        // line 407
        echo twig_escape_filter($this->env, (isset($context["ingreso6"]) ? $context["ingreso6"] : $this->getContext($context, "ingreso6")), "html", null, true);
        echo "</th>
                    </tr>


";
        // line 412
        echo "
          ";
        // line 413
        $context["matHombres"] = 0;
        // line 414
        echo "          ";
        $context["matMujeres"] = 0;
        // line 415
        echo "          ";
        $context["matReno"] = 0;
        // line 416
        echo "          ";
        $context["montoHombres"] = 0;
        // line 417
        echo "          ";
        $context["montoMujeres"] = 0;
        // line 418
        echo "          ";
        $context["montoReno"] = 0;
        // line 419
        echo "          ";
        $context["ingreso7"] = 0;
        // line 420
        echo "
          ";
        // line 421
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["vip"]) ? $context["vip"] : $this->getContext($context, "vip")));
        foreach ($context['_seq'] as $context["_key"] => $context["vip1"]) {
            // line 422
            echo "                ";
            if (($this->getAttribute($context["vip1"], "fechainicio", array()) >= (isset($context["fechai"]) ? $context["fechai"] : $this->getContext($context, "fechai")))) {
                // line 423
                echo "                    ";
                if (($this->getAttribute($context["vip1"], "fechainicio", array()) <= (isset($context["fechaf"]) ? $context["fechaf"] : $this->getContext($context, "fechaf")))) {
                    // line 424
                    echo "

                            ";
                    // line 426
                    if (($this->getAttribute($context["vip1"], "sexo", array()) == 1)) {
                        // line 427
                        echo "
                                  ";
                        // line 428
                        $context["matMujeres"] = (1 + (isset($context["matMujeres"]) ? $context["matMujeres"] : $this->getContext($context, "matMujeres")));
                        // line 429
                        echo "                                  ";
                        $context["montoMujeres"] = ($this->getAttribute($context["vip1"], "precio", array()) + (isset($context["montoMujeres"]) ? $context["montoMujeres"] : $this->getContext($context, "montoMujeres")));
                        // line 430
                        echo "                                  ";
                        $context["ingreso7"] = ($this->getAttribute($context["vip1"], "precio", array()) + (isset($context["ingreso7"]) ? $context["ingreso7"] : $this->getContext($context, "ingreso7")));
                        echo "  

                            ";
                    }
                    // line 433
                    echo "
                            ";
                    // line 434
                    if (($this->getAttribute($context["vip1"], "sexo", array()) == 2)) {
                        // line 435
                        echo "
                                  ";
                        // line 436
                        $context["matHombres"] = (1 + (isset($context["matHombres"]) ? $context["matHombres"] : $this->getContext($context, "matHombres")));
                        // line 437
                        echo "                                  ";
                        $context["montoHombres"] = ($this->getAttribute($context["vip1"], "precio", array()) + (isset($context["montoHombres"]) ? $context["montoHombres"] : $this->getContext($context, "montoHombres")));
                        // line 438
                        echo "                                  ";
                        $context["ingreso7"] = ($this->getAttribute($context["vip1"], "precio", array()) + (isset($context["ingreso7"]) ? $context["ingreso7"] : $this->getContext($context, "ingreso7")));
                        echo "  

                            ";
                    }
                    // line 440
                    echo "     

                            ";
                    // line 442
                    if (($this->getAttribute($context["vip1"], "sexo", array()) == 3)) {
                        // line 443
                        echo "
                                  ";
                        // line 444
                        $context["matReno"] = (1 + (isset($context["matReno"]) ? $context["matReno"] : $this->getContext($context, "matReno")));
                        // line 445
                        echo "                                  ";
                        $context["montoReno"] = ($this->getAttribute($context["vip1"], "precio", array()) + (isset($context["montoReno"]) ? $context["montoReno"] : $this->getContext($context, "montoReno")));
                        // line 446
                        echo "                                  ";
                        $context["ingreso7"] = ($this->getAttribute($context["vip1"], "precio", array()) + (isset($context["ingreso7"]) ? $context["ingreso7"] : $this->getContext($context, "ingreso7")));
                        echo "  

                            ";
                    }
                    // line 448
                    echo "  


                    ";
                }
                // line 452
                echo "                ";
            }
            // line 453
            echo "          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['vip1'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 454
        echo "

                    <tr>
                      <th> Mma</th>
                      <th class=\"asul\">";
        // line 458
        echo twig_escape_filter($this->env, (isset($context["matHombres"]) ? $context["matHombres"] : $this->getContext($context, "matHombres")), "html", null, true);
        echo "</th>
                      <th class=\"asul\">";
        // line 459
        echo twig_escape_filter($this->env, (isset($context["matMujeres"]) ? $context["matMujeres"] : $this->getContext($context, "matMujeres")), "html", null, true);
        echo "</th>
                      <th class=\"asul\">";
        // line 460
        echo twig_escape_filter($this->env, (isset($context["matReno"]) ? $context["matReno"] : $this->getContext($context, "matReno")), "html", null, true);
        echo "</th>
                      <th class=\"asul\">S/.";
        // line 461
        echo twig_escape_filter($this->env, (isset($context["montoHombres"]) ? $context["montoHombres"] : $this->getContext($context, "montoHombres")), "html", null, true);
        echo "</th>
                      <th class=\"asul\">S/.";
        // line 462
        echo twig_escape_filter($this->env, (isset($context["montoMujeres"]) ? $context["montoMujeres"] : $this->getContext($context, "montoMujeres")), "html", null, true);
        echo "</th>
                      <th class=\"asul\">S/.";
        // line 463
        echo twig_escape_filter($this->env, (isset($context["montoReno"]) ? $context["montoReno"] : $this->getContext($context, "montoReno")), "html", null, true);
        echo "</th>
                      <th class=\"asul\">S/.";
        // line 464
        echo twig_escape_filter($this->env, (isset($context["ingreso7"]) ? $context["ingreso7"] : $this->getContext($context, "ingreso7")), "html", null, true);
        echo "</th>
                    </tr>

";
        // line 468
        echo "


          ";
        // line 471
        $context["ingreso8"] = 0;
        // line 472
        echo "          ";
        $context["ingreso8"] = (((((((isset($context["ingreso1"]) ? $context["ingreso1"] : $this->getContext($context, "ingreso1")) + (isset($context["ingreso2"]) ? $context["ingreso2"] : $this->getContext($context, "ingreso2"))) + (isset($context["ingreso3"]) ? $context["ingreso3"] : $this->getContext($context, "ingreso3"))) + (isset($context["ingreso4"]) ? $context["ingreso4"] : $this->getContext($context, "ingreso4"))) + (isset($context["ingreso5"]) ? $context["ingreso5"] : $this->getContext($context, "ingreso5"))) + (isset($context["ingreso6"]) ? $context["ingreso6"] : $this->getContext($context, "ingreso6"))) + (isset($context["ingreso7"]) ? $context["ingreso7"] : $this->getContext($context, "ingreso7")));
        // line 473
        echo "
                    <tr>
                      <th class=\"asul\"> </th>
                      <th class=\"asul\"></th>
                      <th class=\"asul\"></th>
                      <th class=\"asul\"></th>
                      <th class=\"asul\"></th>
                      <th class=\"asul\"></th>
                      <th class=\"asul\"></th>
                      <th class=\"asul\"> S/.";
        // line 482
        echo twig_escape_filter($this->env, (isset($context["ingreso8"]) ? $context["ingreso8"] : $this->getContext($context, "ingreso8")), "html", null, true);
        echo "</th>
                    </tr>

                </tbody>
            </table>

        </div>
        
    </div>
</div>

</body>


</html>";
        
        $__internal_09dca95982520809db55666d767327546f3b2c76e6d289f0e43b08849c22eea6->leave($__internal_09dca95982520809db55666d767327546f3b2c76e6d289f0e43b08849c22eea6_prof);

    }

    public function getTemplateName()
    {
        return "PfaSistemaBundle::ingresos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1206 => 482,  1195 => 473,  1192 => 472,  1190 => 471,  1185 => 468,  1179 => 464,  1175 => 463,  1171 => 462,  1167 => 461,  1163 => 460,  1159 => 459,  1155 => 458,  1149 => 454,  1143 => 453,  1140 => 452,  1134 => 448,  1127 => 446,  1124 => 445,  1122 => 444,  1119 => 443,  1117 => 442,  1113 => 440,  1106 => 438,  1103 => 437,  1101 => 436,  1098 => 435,  1096 => 434,  1093 => 433,  1086 => 430,  1083 => 429,  1081 => 428,  1078 => 427,  1076 => 426,  1072 => 424,  1069 => 423,  1066 => 422,  1062 => 421,  1059 => 420,  1056 => 419,  1053 => 418,  1050 => 417,  1047 => 416,  1044 => 415,  1041 => 414,  1039 => 413,  1036 => 412,  1029 => 407,  1025 => 406,  1021 => 405,  1017 => 404,  1013 => 403,  1009 => 402,  1005 => 401,  999 => 397,  993 => 396,  990 => 395,  984 => 391,  977 => 389,  974 => 388,  972 => 387,  969 => 386,  967 => 385,  963 => 383,  956 => 381,  953 => 380,  951 => 379,  948 => 378,  946 => 377,  943 => 376,  936 => 373,  933 => 372,  931 => 371,  928 => 370,  926 => 369,  922 => 367,  919 => 366,  916 => 365,  912 => 364,  909 => 363,  906 => 362,  903 => 361,  900 => 360,  897 => 359,  894 => 358,  891 => 357,  889 => 356,  885 => 354,  877 => 348,  873 => 347,  869 => 346,  865 => 345,  861 => 344,  857 => 343,  853 => 342,  847 => 338,  841 => 337,  838 => 336,  832 => 332,  825 => 330,  822 => 329,  820 => 328,  817 => 327,  815 => 326,  811 => 324,  804 => 322,  801 => 321,  799 => 320,  796 => 319,  794 => 318,  791 => 317,  784 => 314,  781 => 313,  779 => 312,  776 => 311,  774 => 310,  770 => 308,  767 => 307,  764 => 306,  760 => 305,  757 => 304,  754 => 303,  751 => 302,  748 => 301,  745 => 300,  742 => 299,  739 => 298,  737 => 297,  734 => 296,  727 => 291,  723 => 290,  719 => 289,  715 => 288,  711 => 287,  707 => 286,  703 => 285,  697 => 281,  691 => 280,  688 => 279,  682 => 275,  675 => 273,  672 => 272,  670 => 271,  667 => 270,  665 => 269,  661 => 267,  654 => 265,  651 => 264,  649 => 263,  646 => 262,  644 => 261,  641 => 260,  634 => 257,  631 => 256,  629 => 255,  626 => 254,  624 => 253,  620 => 251,  617 => 250,  614 => 249,  610 => 248,  607 => 247,  604 => 246,  601 => 245,  598 => 244,  595 => 243,  592 => 242,  589 => 241,  587 => 240,  584 => 239,  578 => 235,  574 => 234,  570 => 233,  566 => 232,  562 => 231,  558 => 230,  554 => 229,  549 => 226,  543 => 225,  540 => 224,  534 => 220,  527 => 218,  524 => 217,  522 => 216,  519 => 215,  517 => 214,  513 => 212,  506 => 210,  503 => 209,  501 => 208,  498 => 207,  496 => 206,  493 => 205,  486 => 202,  483 => 201,  481 => 200,  478 => 199,  476 => 198,  472 => 196,  469 => 195,  466 => 194,  462 => 193,  459 => 192,  456 => 191,  453 => 190,  450 => 189,  447 => 188,  444 => 187,  441 => 186,  439 => 185,  436 => 184,  429 => 179,  425 => 178,  421 => 177,  417 => 176,  413 => 175,  409 => 174,  405 => 173,  399 => 169,  393 => 168,  390 => 167,  384 => 163,  377 => 161,  374 => 160,  372 => 159,  369 => 158,  367 => 157,  363 => 155,  356 => 153,  353 => 152,  351 => 151,  348 => 150,  346 => 149,  343 => 148,  336 => 145,  333 => 144,  331 => 143,  328 => 142,  326 => 141,  322 => 139,  319 => 138,  316 => 137,  312 => 136,  309 => 135,  306 => 134,  303 => 133,  300 => 132,  297 => 131,  294 => 130,  291 => 129,  289 => 128,  286 => 127,  280 => 123,  276 => 122,  272 => 121,  268 => 120,  264 => 119,  260 => 118,  256 => 117,  237 => 100,  231 => 99,  228 => 98,  222 => 94,  215 => 92,  212 => 91,  210 => 90,  207 => 89,  205 => 88,  201 => 86,  194 => 84,  191 => 83,  189 => 82,  186 => 81,  184 => 80,  181 => 79,  174 => 76,  171 => 75,  169 => 74,  166 => 73,  164 => 72,  160 => 70,  157 => 69,  154 => 68,  150 => 67,  147 => 66,  144 => 65,  141 => 64,  138 => 63,  135 => 62,  132 => 61,  129 => 60,  127 => 59,  120 => 55,  115 => 53,  102 => 43,  97 => 41,  92 => 39,  87 => 37,  82 => 35,  68 => 24,  63 => 22,  52 => 14,  47 => 12,  43 => 11,  38 => 9,  34 => 8,  30 => 7,  22 => 1,);
    }
}
