<?php

include_once $_SERVER['DOCUMENT_ROOT'] . '/UT6_2_Ejercicio_Reserva_Hoteles_MVC/libraries/utilidades/funcionesUtilidades.php';

class UsuariosView {

    public function maquetarLogin($inner) {
        return ('

                    <head>
                        <meta name="viewport" content="width=device-width, initial-scale=1.0">
                        <meta charset="UTF-8">
                        <link rel="stylesheet" href="templates/login.css"/> 
                        <title>Hoteles Talavera</title>
                    </head>

                        <section class="vh-100 gradient-custom">
                            <div class="container py-5 h-100">
                                ' . $inner . '
                            </div>
                        </section>'
                        );
    }

    public function formLogin($inner) {
        return (
                '<form class="row d-flex justify-content-center align-items-center h-100" action = "' . $_SERVER['PHP_SELF'] . '?controller=Hoteles&action=mostrarHomePageLista" method="POST">
                        ' . $inner . '
                </form>');
    }

    public function loginPrincipal($alerta = '') {
        return ('
                            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                              <div class="card bg-dark text-white" style="border-radius: 1rem;">
                                <div class="card-body p-5 text-center">

                                  <div class="mb-md-5 mt-md-4 pb-5">

                                    <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
                                    '.$alerta.'
                                    <p class="text-white-50 mb-5">Please enter your login and password!</p>

                                    <div class="form-outline form-white mb-4">
                                      <input required type="text" name="usr" id="typeUserX" class="form-control form-control-lg"/>
                                      <label class="form-label" for="typeUserX">Usuario</label>
                                    </div>

                                    <div class="form-outline form-white mb-4">
                                      <input required type="password" name="password" id="typePasswordX" class="form-control form-control-lg" />
                                      <label class="form-label" for="typePasswordX">Contraseña</label>
                                    </div>

                                    <p class="small mb-5 pb-lg-2"><a class="text-white-50" href="#!">Olvidaste tu contraseña?</a></p>

                                    <button class="btn btn-outline-light btn-lg px-5" type="submit">Login</button>

                                    <div class="d-flex justify-content-center text-center mt-4 pt-1">
                                      <a href="#!" class="text-white"><i class="fab fa-facebook-f fa-lg"></i></a>
                                      <a href="#!" class="text-white"><i class="fab fa-twitter fa-lg mx-4 px-2"></i></a>
                                      <a href="#!" class="text-white"><i class="fab fa-google fa-lg"></i></a>
                                    </div>

                                  </div>

                                  <div>
                                    <p class="mb-0">No tienes cuenta?<a href="#!" class="text-white-50 fw-bold">Sign Up</a>
                                    </p>
                                  </div>
                                </div>
                              </div>
                            </div>
'
                );
    }

    public function mostrarLoginPrincipal($alerta = null) {
        echo $this->formLogin($this->loginPrincipal($alerta));
    }

    // Muestra un mensaje de error
    public function mostrarError($mensaje) {
        echo '<p>Error: ' . $mensaje . '</p>';
    }
}
