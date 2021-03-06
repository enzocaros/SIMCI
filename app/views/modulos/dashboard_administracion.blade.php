@extends('layouts.plantilla_master')

@section('titulo')
    <title>SIMCI - Administracion</title>
@stop

@section('contenido-body-master')

    <header>
        <div class="ui fixed menu">
            <div class="ui container">
                <a class="item" id="btn-abrir-menu">
                    <i class="sidebar icon"></i>
                </a>

                <a href="#/" class="header item">
                    <img class="logo" src="/img/logo.png">
                    &nbsp;&nbsp;&nbsp;SIMCI
                </a>

                <div class="right menu">

                    <div class="ui pointing dropdown link item" tabindex="0" ng-click="cargar_notificaciones()"
                         id="item_menu_notificaciones">
                        <i class="circular empty teal alarm icon" id="icono_barra_notificaciones"></i>
                        <a class="ui blue empty circular label"
                           id="label_numero_notificaciones"><% notificaciones.getCount() %></a>
                        <i class="dropdown icon"></i>

                        <div class="menu transition hidden menu_notificaciones" tabindex="-1">
                            <div class="header">Notificaciones</div>
                            <div class="right label_ver_notificaciones"><a>Ver todas</a></div>

                            <div class="divider"></div>

                            <div ng-show="notificaciones.showLoading()" class="item loading_notificaciones">
                                <div class="ui active loader"></div>
                            </div>

                            <div class="item" ng-show="notificaciones.getTotal() == 0">
                                <p align="center">No hay notificaciones</p>
                            </div>

                            <div ng-show="notificaciones.showNotificaciones()" class="item"
                                 ng-repeat="noti in notificaciones.getAllData() track by $index">
                                <!--<img class="ui avatar img_item_notificacion" src="/img/perfil-default.jpg">
								<div class="cuerpo_notificacion">
									<span class="texto capitalize"><% noti.mensaje %></span> 
								</div>
								<div class="fecha_notificacion" ><% noti.fecha | formato_fecha:'DD/MM/YY' %></div>-->
                                <div class="ui feed">
                                    <div class="event">
                                        <div class="label">
                                            <img src="/img/perfil-default.jpg">
                                        </div>

                                        <div class="content">
                                            <div class="summary">
                                                <a class="user">
                                                    <% noti.usuario | capitalize %>
                                                </a>
                                                <% noti.mensaje %>
                                                <div class="date" style="float:right;">
                                                    <% noti.fecha | formato_fecha:'DD/MM/YY' %>
                                                </div>
                                            </div>
                                            <div class="meta">
                                                <a class="like"><i class="clock icon"></i><% noti.hora %>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="ui dropdown item">
                        <img class="ui right spaced avatar image" src="{{ Auth::user()->get_avatar() }}">
                        Usuario
                        <i class="dropdown icon"></i>

                        <div class="menu">
                            <div class="item">
                                <div class="ui card">
                                    <div class="image">
                                        <img src="{{ Auth::user()->imagen }}">
                                    </div>
                                    <div class="content">
                                        <a class="header">{{ ucfirst(Auth::user()->usuario) }}</a>

                                        <div class="meta">
                                            <span class="date">Tipo: {{ Auth::user()->nombre_tipo_usuario() }}</span>
                                        </div>
                                        <div class="description">
                                            {{ Auth::user()->nombre_corto()}}
                                        </div>
                                    </div>
                                    <div class="extra content">
                                        <a href="/autenticacion/logout"><i class="settings icon"></i>Salir</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </header>


    <div class="ui left vertical inverted labeled icon sidebar menu" id="menu-administracion">
        <a class="item" href="#/">
            <i class="home icon"></i>
            Inicio
        </a>

        <a class="item" ng-href="#/usuarios">
            <i class="user layout icon"></i>
            Usuarios
        </a>

        <a class="item" ng-href="#/catalogo">
            <i class="book icon"></i>
            Catalogo
        </a>

        <a class="item" ng-href="#/inventario">
            <i class="archive icon"></i>
            Inventario
        </a>

        <a class="item" ng-href="#/proveedores">
            <i class="shop icon"></i>
            Proveedor
        </a>

        <a class="item" ng-href="#/laboratorio">
            <i class="lab icon"></i>
            Laboratorio
        </a>

        <a class="item" ng-href="#/ordenes">
            <i class="edit icon"></i>
            Ordenes
        </a>

        <a class="item" ng-href="#/reportes">
            <i class="file text icon"></i>
            Reportes
        </a>

        <a class="item" ng-href="#/correos">
            <i class="mail icon"></i>
            Correos
        </a>

        <a class="item" ng-href="#/consulta">
            <i class="search icon"></i>
            Consultas
        </a>

        <a class="item" ng-href="#/instituciones">
            <i class="building icon"></i>
            Instituciones
        </a>

        <a class="item">
            <i class="settings icon"></i>
            Settings
        </a>
    </div>

    <div class="ui container espacio_buttom espacio_top">
        <div ng-view></div>
    </div>

    <div class="ui bottom fixed menu barra_inferior">
        <div class="item right">
            <a class="ui teal tag label">
                <span id="reloj">0:00:00</span>
            </a>
        </div>
    </div>

@stop

@section('js')
    <script>
        $(document).ready(function () {

            $('#contenedorPadre').addClass('backgroundPadre');

            $("#btn-abrir-menu").click(function () {
                $('#menu-administracion')
                        .sidebar({
                            transition: 'overlay',
                            dimPage: true,
                            context: $('body'),
                        })
                        .sidebar('toggle');
            });

            $('.ui.dropdown').dropdown({
                transition: 'drop'
            });
        });
    </script>
@stop
