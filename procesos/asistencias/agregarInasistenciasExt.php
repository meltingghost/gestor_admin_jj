<?php 

	require_once "../database/conexion.php";

	$cedula = $_POST['cedulaProf'];
	$fecha = $_POST['fechaAsist'];
	$observacion = $_POST['observacionAsis'];

	$fechaEntrada = explode("-", $_POST['fechaAsist']);
	$fechaEntrada = $fechaEntrada[2] . "-" . $fechaEntrada[1] . "-" . $fechaEntrada[0] . " 08:00:00";

	$fechaSalida = explode("-", $_POST['fechaAsist']);
	$fechaSalida = $fechaSalida[2] . "-" . $fechaSalida[1] . "-" . $fechaSalida[0] . " 12:00:00";

	$query = mysqli_query($conectar, "SELECT p1.cedulaPersonal, p2.id_funcionPersonal FROM personal_p1 AS p1 INNER JOIN personal_p2 AS p2 ON p1.id_personal = p2.id_personal WHERE p1.cedulaPersonal = '$cedula' AND p2.id_funcionPersonal = 1 OR p1.cedulaPersonal = '$cedula' AND p2.id_funcionPersonal = 2");
	$nr = mysqli_num_rows($query);

	if ($nr == 0 OR $nr == "") {
		$data = 2;
	} else {

		$query2 = mysqli_query($conectar, "SELECT cedulaPersonal FROM personal_p1");

		while ($row = $query2->fetch_array(MYSQLI_ASSOC)) {

			$cedulaPersonal = $row['cedulaPersonal'];

			$asistentes = mysqli_query($conectar, "SELECT id_asistencia, cedulaPersonal, DATE_FORMAT(fechaHoraEntrada, '%d-%m-%Y') AS fechaHoraEntrada, entrada, salida, asistente FROM asistencias WHERE cedulaPersonal = '$cedulaPersonal' AND entrada = 1 AND salida = 1 AND asistente = 1 ORDER BY id_asistencia DESC LIMIT 1");
			$nrAsistentes = mysqli_num_rows($asistentes);

			if ($nrAsistentes == 0 OR $nrAsistentes == "") {

				$sql = "DELETE FROM asistencias WHERE cedulaPersonal = '$cedulaPersonal' AND entrada = 1 AND salida = 0 AND asistente = 0";
				$resultado = $conectar->query($sql);

				if ($resultado) {

					$inasistentes = mysqli_query($conectar, "SELECT id_asistencia, cedulaPersonal, DATE_FORMAT(fechaHoraEntrada, '%d-%m-%Y') AS fechaHoraEntrada, entrada, asistente FROM asistencias WHERE cedulaPersonal = '$cedulaPersonal' AND entrada = 0 AND asistente = 0 ORDER BY id_asistencia DESC LIMIT 1");
					$nrInasistentes = mysqli_num_rows($inasistentes);

					if ($nrInasistentes == 0 OR $nrInasistentes == "") {
					
						$query3 = mysqli_query($conectar, "SELECT id_asistencia, cedulaPersonal, DATE_FORMAT(fechaHoraEntrada, '%d-%m-%Y') AS fechaHoraEntrada, salida FROM asistencias WHERE cedulaPersonal = '$cedulaPersonal' AND salida = 1 ORDER BY id_asistencia DESC LIMIT 1");
						$nr2 = mysqli_num_rows($query3);

						if ($nr2 == 0 OR $nr2 == "") {

							$query4 = mysqli_query($conectar, "SELECT id_asistencia, cedulaPersonal, DATE_FORMAT(fechaHoraEntrada, '%d-%m-%Y') AS fechaHoraEntrada, salida FROM asistencias WHERE cedulaPersonal = '$cedulaPersonal' AND entrada = 1 ORDER BY id_asistencia DESC LIMIT 1");
							$nr3 = mysqli_num_rows($query4);

							if ($nr3 != 0 OR $nr3 != "") {

								foreach ($query4 as $key) {

									if ($key['fechaHoraEntrada'] != $fecha) {

										$sql = "INSERT INTO `asistencias`(`id_asistencia`, `cedulaPersonal`, `fechaHoraEntrada`, `entrada`, `fechaHoraSalida`, `salida`, `observacion`, `asistente`) VALUES (NULL, '$cedulaPersonal', '$fechaEntrada', 0, '$fechaSalida', 0, '$observacion', 0)";
										$ejecutar = mysqli_query($conectar, $sql);

										if ($ejecutar) {
											$data = 1;
										} else {
											$data = 4;
										}

									}

								}

							} else {

								$query5 = mysqli_query($conectar, "SELECT id_asistencia, cedulaPersonal, DATE_FORMAT(fechaHoraEntrada, '%d-%m-%Y') AS fechaHoraEntrada, salida FROM asistencias WHERE cedulaPersonal = '$cedulaPersonal' AND entrada = 0 AND salida = 0 AND asistente = 0 ORDER BY id_asistencia DESC LIMIT 1");
								$nr4 = mysqli_num_rows($query5);

								if ($nr4 == 0 OR $nr4 == "") {

									$sql = "INSERT INTO `asistencias`(`id_asistencia`, `cedulaPersonal`, `fechaHoraEntrada`, `entrada`, `fechaHoraSalida`, `salida`, `observacion`, `asistente`) VALUES (NULL, '$cedulaPersonal', '$fechaEntrada', 0, '$fechaSalida', 0, '$observacion', 0)";
									$ejecutar = mysqli_query($conectar, $sql);

									if ($ejecutar) {
										$data = 1;
									} else {
										$data = 4;
									}

								} else {

									foreach ($query5 as $key) {

										if ($key['fechaHoraEntrada'] != $fecha) {

											$sql = "INSERT INTO `asistencias`(`id_asistencia`, `cedulaPersonal`, `fechaHoraEntrada`, `entrada`, `fechaHoraSalida`, `salida`, `observacion`, `asistente`) VALUES (NULL, '$cedulaPersonal', '$fechaEntrada', 0, '$fechaSalida', 0, '$observacion', 0)";
											$ejecutar = mysqli_query($conectar, $sql);

											if ($ejecutar) {
												$data = 1;
											} else {
												$data = 4;
											}

										} else {
											$data = 3;
										}

									}

								}

							}

						} else {

							foreach ($query3 as $key) {

								if ($key['fechaHoraEntrada'] != $fecha) {

									$sql = "INSERT INTO `asistencias`(`id_asistencia`, `cedulaPersonal`, `fechaHoraEntrada`, `entrada`, `fechaHoraSalida`, `salida`, `observacion`, `asistente`) VALUES (NULL, '$cedulaPersonal', '$fechaEntrada', 0, '$fechaSalida', 0, '$observacion', 0)";
									$ejecutar = mysqli_query($conectar, $sql);

									if ($ejecutar) {
										$data = 1;
									} else {
										$data = 4;
									}

								}

							}

						}

					} else {

						foreach ($inasistentes as $key) {
							
							if ($key['fechaHoraEntrada'] == $fecha) {
								$data = 3;
							} else {

								$query3 = mysqli_query($conectar, "SELECT id_asistencia, cedulaPersonal, DATE_FORMAT(fechaHoraEntrada, '%d-%m-%Y') AS fechaHoraEntrada, salida FROM asistencias WHERE cedulaPersonal = '$cedulaPersonal' AND salida = 1 ORDER BY id_asistencia DESC LIMIT 1");
								$nr2 = mysqli_num_rows($query3);

								if ($nr2 == 0 OR $nr2 == "") {

									$query4 = mysqli_query($conectar, "SELECT id_asistencia, cedulaPersonal, DATE_FORMAT(fechaHoraEntrada, '%d-%m-%Y') AS fechaHoraEntrada, salida FROM asistencias WHERE cedulaPersonal = '$cedulaPersonal' AND entrada = 1 ORDER BY id_asistencia DESC LIMIT 1");
									$nr3 = mysqli_num_rows($query4);

									if ($nr3 != 0 OR $nr3 != "") {

										foreach ($query4 as $key) {

											if ($key['fechaHoraEntrada'] != $fecha) {

												$sql = "INSERT INTO `asistencias`(`id_asistencia`, `cedulaPersonal`, `fechaHoraEntrada`, `entrada`, `fechaHoraSalida`, `salida`, `observacion`, `asistente`) VALUES (NULL, '$cedulaPersonal', '$fechaEntrada', 0, '$fechaSalida', 0, '$observacion', 0)";
												$ejecutar = mysqli_query($conectar, $sql);

												if ($ejecutar) {
													$data = 1;
												} else {
													$data = 4;
												}

											}

										}

									} else {

										$query5 = mysqli_query($conectar, "SELECT id_asistencia, cedulaPersonal, DATE_FORMAT(fechaHoraEntrada, '%d-%m-%Y') AS fechaHoraEntrada, salida FROM asistencias WHERE cedulaPersonal = '$cedulaPersonal' AND entrada = 0 AND salida = 0 AND asistente = 0 ORDER BY id_asistencia DESC LIMIT 1");
										$nr4 = mysqli_num_rows($query5);

										if ($nr4 == 0 OR $nr4 == "") {

											$sql = "INSERT INTO `asistencias`(`id_asistencia`, `cedulaPersonal`, `fechaHoraEntrada`, `entrada`, `fechaHoraSalida`, `salida`, `observacion`, `asistente`) VALUES (NULL, '$cedulaPersonal', '$fechaEntrada', 0, '$fechaSalida', 0, '$observacion', 0)";
											$ejecutar = mysqli_query($conectar, $sql);

											if ($ejecutar) {
												$data = 1;
											} else {
												$data = 4;
											}

										} else {

											foreach ($query5 as $key) {

												if ($key['fechaHoraEntrada'] != $fecha) {

													$sql = "INSERT INTO `asistencias`(`id_asistencia`, `cedulaPersonal`, `fechaHoraEntrada`, `entrada`, `fechaHoraSalida`, `salida`, `observacion`, `asistente`) VALUES (NULL, '$cedulaPersonal', '$fechaEntrada', 0, '$fechaSalida', 0, '$observacion', 0)";
													$ejecutar = mysqli_query($conectar, $sql);

													if ($ejecutar) {
														$data = 1;
													} else {
														$data = 4;
													}

												} else {
													$data = 3;
												}

											}

										}

									}

								} else {

									foreach ($query3 as $key) {

										if ($key['fechaHoraEntrada'] != $fecha) {

											$sql = "INSERT INTO `asistencias`(`id_asistencia`, `cedulaPersonal`, `fechaHoraEntrada`, `entrada`, `fechaHoraSalida`, `salida`, `observacion`, `asistente`) VALUES (NULL, '$cedulaPersonal', '$fechaEntrada', 0, '$fechaSalida', 0, '$observacion', 0)";
											$ejecutar = mysqli_query($conectar, $sql);

											if ($ejecutar) {
												$data = 1;
											} else {
												$data = 4;
											}

										}

									}

								}

							}

						}

					}

				} else {
					$data = 4;
				}

			} else {

				foreach ($asistentes as $key) {
					
					if ($key['fechaHoraEntrada'] == $fecha) {
						
						$data = 1;

					} else {

						$sql = "DELETE FROM asistencias WHERE cedulaPersonal = '$cedulaPersonal' AND entrada = 1 AND salida = 0 AND asistente = 0";
						$resultado = $conectar->query($sql);

						if ($resultado) {

							$inasistentes = mysqli_query($conectar, "SELECT id_asistencia, cedulaPersonal, DATE_FORMAT(fechaHoraEntrada, '%d-%m-%Y') AS fechaHoraEntrada, entrada, asistente FROM asistencias WHERE cedulaPersonal = '$cedulaPersonal' AND entrada = 0 AND asistente = 0 ORDER BY id_asistencia DESC LIMIT 1");
							$nrInasistentes = mysqli_num_rows($inasistentes);

							if ($nrInasistentes == 0 OR $nrInasistentes == "") {

								$query3 = mysqli_query($conectar, "SELECT id_asistencia, cedulaPersonal, DATE_FORMAT(fechaHoraEntrada, '%d-%m-%Y') AS fechaHoraEntrada, salida FROM asistencias WHERE cedulaPersonal = '$cedulaPersonal' AND salida = 1 ORDER BY id_asistencia DESC LIMIT 1");
								$nr2 = mysqli_num_rows($query3);

								if ($nr2 == 0 OR $nr2 == "") {

									$query4 = mysqli_query($conectar, "SELECT id_asistencia, cedulaPersonal, DATE_FORMAT(fechaHoraEntrada, '%d-%m-%Y') AS fechaHoraEntrada, salida FROM asistencias WHERE cedulaPersonal = '$cedulaPersonal' AND entrada = 1 ORDER BY id_asistencia DESC LIMIT 1");
									$nr3 = mysqli_num_rows($query4);

									if ($nr3 != 0 OR $nr3 != "") {

										foreach ($query4 as $key) {

											if ($key['fechaHoraEntrada'] != $fecha) {

												$sql = "INSERT INTO `asistencias`(`id_asistencia`, `cedulaPersonal`, `fechaHoraEntrada`, `entrada`, `fechaHoraSalida`, `salida`, `observacion`, `asistente`) VALUES (NULL, '$cedulaPersonal', '$fechaEntrada', 0, '$fechaSalida', 0, '$observacion', 0)";
												$ejecutar = mysqli_query($conectar, $sql);

												if ($ejecutar) {
													$data = 1;
												} else {
													$data = 4;
												}

											}

										}

									} else {

										$query5 = mysqli_query($conectar, "SELECT id_asistencia, cedulaPersonal, DATE_FORMAT(fechaHoraEntrada, '%d-%m-%Y') AS fechaHoraEntrada, salida FROM asistencias WHERE cedulaPersonal = '$cedulaPersonal' AND entrada = 0 AND salida = 0 AND asistente = 0 ORDER BY id_asistencia DESC LIMIT 1");
										$nr4 = mysqli_num_rows($query5);

										if ($nr4 == 0 OR $nr4 == "") {

											$sql = "INSERT INTO `asistencias`(`id_asistencia`, `cedulaPersonal`, `fechaHoraEntrada`, `entrada`, `fechaHoraSalida`, `salida`, `observacion`, `asistente`) VALUES (NULL, '$cedulaPersonal', '$fechaEntrada', 0, '$fechaSalida', 0, '$observacion', 0)";
											$ejecutar = mysqli_query($conectar, $sql);

											if ($ejecutar) {
												$data = 1;
											} else {
												$data = 4;
											}

										} else {

											foreach ($query5 as $key) {

												if ($key['fechaHoraEntrada'] != $fecha) {

													$sql = "INSERT INTO `asistencias`(`id_asistencia`, `cedulaPersonal`, `fechaHoraEntrada`, `entrada`, `fechaHoraSalida`, `salida`, `observacion`, `asistente`) VALUES (NULL, '$cedulaPersonal', '$fechaEntrada', 0, '$fechaSalida', 0, '$observacion', 0)";
													$ejecutar = mysqli_query($conectar, $sql);

													if ($ejecutar) {
														$data = 1;
													} else {
														$data = 4;
													}

												} else {
													$data = 3;
												}

											}

										}

									}

								} else {

									foreach ($query3 as $key) {

										if ($key['fechaHoraEntrada'] != $fecha) {

											$sql = "INSERT INTO `asistencias`(`id_asistencia`, `cedulaPersonal`, `fechaHoraEntrada`, `entrada`, `fechaHoraSalida`, `salida`, `observacion`, `asistente`) VALUES (NULL, '$cedulaPersonal', '$fechaEntrada', 0, '$fechaSalida', 0, '$observacion', 0)";
											$ejecutar = mysqli_query($conectar, $sql);

											if ($ejecutar) {
												$data = 1;
											} else {
												$data = 4;
											}

										}

									}

								}

							} else {

								foreach ($inasistentes as $key) {

									if ($key['fechaHoraEntrada'] == $fecha) {
										$data = 3;
									} else {

										$query3 = mysqli_query($conectar, "SELECT id_asistencia, cedulaPersonal, DATE_FORMAT(fechaHoraEntrada, '%d-%m-%Y') AS fechaHoraEntrada, salida FROM asistencias WHERE cedulaPersonal = '$cedulaPersonal' AND salida = 1 ORDER BY id_asistencia DESC LIMIT 1");
										$nr2 = mysqli_num_rows($query3);

										if ($nr2 == 0 OR $nr2 == "") {

											$query4 = mysqli_query($conectar, "SELECT id_asistencia, cedulaPersonal, DATE_FORMAT(fechaHoraEntrada, '%d-%m-%Y') AS fechaHoraEntrada, salida FROM asistencias WHERE cedulaPersonal = '$cedulaPersonal' AND entrada = 1 ORDER BY id_asistencia DESC LIMIT 1");
											$nr3 = mysqli_num_rows($query4);

											if ($nr3 != 0 OR $nr3 != "") {

												foreach ($query4 as $key) {

													if ($key['fechaHoraEntrada'] != $fecha) {

														$sql = "INSERT INTO `asistencias`(`id_asistencia`, `cedulaPersonal`, `fechaHoraEntrada`, `entrada`, `fechaHoraSalida`, `salida`, `observacion`, `asistente`) VALUES (NULL, '$cedulaPersonal', '$fechaEntrada', 0, '$fechaSalida', 0, '$observacion', 0)";
														$ejecutar = mysqli_query($conectar, $sql);

														if ($ejecutar) {
															$data = 1;
														} else {
															$data = 4;
														}

													}

												}

											} else {

												$query5 = mysqli_query($conectar, "SELECT id_asistencia, cedulaPersonal, DATE_FORMAT(fechaHoraEntrada, '%d-%m-%Y') AS fechaHoraEntrada, salida FROM asistencias WHERE cedulaPersonal = '$cedulaPersonal' AND entrada = 0 AND salida = 0 AND asistente = 0 ORDER BY id_asistencia DESC LIMIT 1");
												$nr4 = mysqli_num_rows($query5);

												if ($nr4 == 0 OR $nr4 == "") {

													$sql = "INSERT INTO `asistencias`(`id_asistencia`, `cedulaPersonal`, `fechaHoraEntrada`, `entrada`, `fechaHoraSalida`, `salida`, `observacion`, `asistente`) VALUES (NULL, '$cedulaPersonal', '$fechaEntrada', 0, '$fechaSalida', 0, '$observacion', 0)";
													$ejecutar = mysqli_query($conectar, $sql);

													if ($ejecutar) {
														$data = 1;
													} else {
														$data = 4;
													}

												} else {

													foreach ($query5 as $key) {

														if ($key['fechaHoraEntrada'] != $fecha) {

															$sql = "INSERT INTO `asistencias`(`id_asistencia`, `cedulaPersonal`, `fechaHoraEntrada`, `entrada`, `fechaHoraSalida`, `salida`, `observacion`, `asistente`) VALUES (NULL, '$cedulaPersonal', '$fechaEntrada', 0, '$fechaSalida', 0, '$observacion', 0)";
															$ejecutar = mysqli_query($conectar, $sql);

															if ($ejecutar) {
																$data = 1;
															} else {
																$data = 4;
															}

														} else {
															$data = 3;
														}

													}

												}

											}

										} else {

											foreach ($query3 as $key) {

												if ($key['fechaHoraEntrada'] != $fecha) {

													$sql = "INSERT INTO `asistencias`(`id_asistencia`, `cedulaPersonal`, `fechaHoraEntrada`, `entrada`, `fechaHoraSalida`, `salida`, `observacion`, `asistente`) VALUES (NULL, '$cedulaPersonal', '$fechaEntrada', 0, '$fechaSalida', 0, '$observacion', 0)";
													$ejecutar = mysqli_query($conectar, $sql);

													if ($ejecutar) {
														$data = 1;
													} else {
														$data = 4;
													}

												}

											}

										}

									}

								}

							}

						} else {
							$data = 4;
						}

					}

				}
				
			}

		}

	}

	sleep(1);
	print(json_encode($data));

?>