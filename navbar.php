<div id="navbar" class="navbar navbar-default          ace-save-state">
			<div class="navbar-container ace-save-state" id="navbar-container">
				<button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
					<span class="sr-only">Toggle sidebar</span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>
				</button>

				<div class="navbar-header pull-left">
					<a href="admin.php" class="navbar-brand">
						<small>
							<i><img src="https://img.icons8.com/stickers/25/000000/cat-footprint.png"/></i>
							Veterinaria Mascota
						</small>
					</a>
				</div>

				<div class="navbar-buttons navbar-header pull-right" role="navigation">
					<ul class="nav ace-nav">
						<li class="purple dropdown-modal">
							<a data-toggle="dropdown" class="dropdown-toggle" href="#">
								<i class="ace-icon glyphicon glyphicon-gift icon-animated-bell"></i>
								<span class="badge badge-important">
									0
								</span>
							</a>

							<ul class="dropdown-menu-right dropdown-navbar navbar-pink dropdown-menu dropdown-caret dropdown-close">
								<li class="dropdown-header">
									<i class="ace-icon fa fa-exclamation-triangle"></i>
									Notificaciones
								</li>
								
								
								<li class="dropdown-footer">
									<a href="">
										Usted no tiene ningun cupón 
										<i class="ace-icon fa fa-arrow-right"></i>
									</a>
								</li>
							</ul>
						</li>

						<li class="green dropdown-modal">
							<a data-toggle="dropdown" class="dropdown-toggle" href="#">
								<i class="ace-icon glyphicon glyphicon-shopping-cart icon-animated-vertical"></i>
								<span class="badge badge-success">
									<?= $rows[0];?>
								</span>
							</a>

							<ul class="dropdown-menu-right dropdown-navbar dropdown-menu dropdown-caret dropdown-close" style="width: 500px; height: 500px;">
								<li class="dropdown-header" >
									<i class="ace-icon glyphicon glyphicon-shopping-cart"></i>
									Servicios agregados
								</li>
								<table class="table table-hover" style="color: black;">
									<tbody>
											<?php
											$queryB = "SELECT idServicioSolicitado, s.nombreservicio, s.precio FROM servicios AS s 
											INNER JOIN servicossolicitados AS ss ON s.idservicio = ss.idservicio
											INNER JOIN usuarios as u ON u.idusuarios = ss.idusuarios
											WHERE u.idusuarios = $iduser;";
											$result1 = $conexion->query($queryB);
											while($row1 = mysqli_fetch_array($result1)){ ?>
													<tr>
														<td><?= $row1['nombreservicio'];   ?></td>
														<td>$<?= $row1['precio'];   ?>.00</td>
														<td>
															<a href="eliminarservicio.php?id=<?= $row1['idServicioSolicitado']; ?>" class="btn btn-danger btn-xs">
																<i class="ace-icon glyphicon glyphicon-trash"></i>
															</a>
														</td>
													</tr> 
											<?php } ?>
									</tbody>
								</table>
								<li class="dropdown-footer">
									<!-- <a href="">
										Ver mis certificaciones
										<i class="ace-icon fa fa-arrow-right"></i>
									</a> -->
								</li>
							</ul>
						</li>

						<li class="light-blue dropdown-modal">
							<a data-toggle="dropdown" href="#" class="dropdown-toggle">
								<!-- <img class="nav-user-photo" src="assets/images/avatars/user.jpg"  /> -->
								<img class="nav-user-photo" src="https://img.icons8.com/external-kiranshastry-lineal-color-kiranshastry/64/000000/external-user-interface-kiranshastry-lineal-color-kiranshastry.png"/>
								<span class="user-info">
									<small>Bienvenid@</small>
									<!-- Mostrar Nombre del Usuario Logueado-->
										<?php echo utf8_decode($row['NombreC']);?>
								</span>

								<i class="ace-icon fa fa-caret-down"></i>
							</a>

							<ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">


								<!-- <li>
									<a href="#">
										<i class="ace-icon fa fa-user"></i>
										Perfil
									</a>
								</li>

								<li class="divider"></li> -->

								<li>
									<a href="salir.php">
										<i class="ace-icon fa fa-power-off"></i>
										Salir
									</a>
								</li>
							</ul>
						</li>
					</ul>
				</div>
			</div><!-- /.navbar-container -->
		</div>