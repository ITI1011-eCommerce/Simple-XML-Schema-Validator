<?php

/**
 * Author: Randall Castillo
 * Author URL: http://www.randallcastillo.me
 * Date: 11/03/2017
 * Time: 09:43 AM
 */

$xsd_str = '<?xml version="1.0" encoding="UTF-8"?>
<xs:schema xmlns:xs="http://www.w3.org/2001/XMLSchema" xmlns="https://tribunet.hacienda.go.cr/docs/esquemas/2011/v3_1"
targetNamespace="https://tribunet.hacienda.go.cr/docs/esquemas/2011/v3_1" elementFormDefault="qualified" attributeFormDefault="unqualified"
version="3_1">
	<xs:element name="FacturaElectronicaXML">
		<xs:annotation>
			<xs:documentation>Para los efectos de facilitar la implementación de sistemas computacionales se definio el esquema XML para los Documentos Electrónicos (Factura, Nota de Débito y Nota de Crédito)</xs:documentation>
		</xs:annotation>
		<xs:complexType>
			<xs:sequence>
				<xs:sequence>
					<xs:element name="Encabezado">
						<xs:complexType>
							<xs:sequence>
								<xs:element name="VersionDoc" nillable="false">
									<xs:annotation>
										<xs:documentation>Versión del Documento Electrónico</xs:documentation>
									</xs:annotation>
									<xs:simpleType>
										<xs:restriction base="xs:int">
											<xs:totalDigits value="4"/>
										</xs:restriction>
									</xs:simpleType>
								</xs:element>
								<xs:element name="TipoDoc" nillable="false">
									<xs:annotation>
										<xs:documentation>Tipo de Documento Electrónico: 01 Factura, 02 Nota de Débito, 03 Nota de Crédito</xs:documentation>
									</xs:annotation>
									<xs:simpleType>
										<xs:restriction base="xs:int">
											<xs:totalDigits value="2"/>
											<xs:enumeration value="01"/>
											<xs:enumeration value="02"/>
											<xs:enumeration value="03"/>
										</xs:restriction>
									</xs:simpleType>
								</xs:element>
								<xs:element name="NumConsecutivoCompr">
									<xs:annotation>
										<xs:documentation>Número consecutivo del Documento Electrónico</xs:documentation>
									</xs:annotation>
									<xs:simpleType>
										<xs:restriction base="xs:unsignedLong">
											<xs:totalDigits value="20"/>
										</xs:restriction>
									</xs:simpleType>
								</xs:element>
								<xs:element name="FechaEmisionDoc" type="xs:dateTime">
									<xs:annotation>
										<xs:documentation>Fecha en la que se genera el documento Electrónico</xs:documentation>
									</xs:annotation>
								</xs:element>
								<xs:element name="CondicionVenta">
									<xs:annotation>
										<xs:documentation>Condición de Venta: 01 Contado, 02 Crédito, 03 Consignación, 04 Apartado, 05 Arrendamiento con Opción de Compra. Este dato aplica para Factura, Nota de Crédito y Débito</xs:documentation>
									</xs:annotation>
									<xs:simpleType>
										<xs:restriction base="xs:int">
											<xs:totalDigits value="2"/>
											<xs:enumeration value="01"/>
											<xs:enumeration value="02"/>
											<xs:enumeration value="03"/>
											<xs:enumeration value="04"/>
											<xs:enumeration value="05"/>
										</xs:restriction>
									</xs:simpleType>
								</xs:element>
								<xs:element name="Emisor">
									<xs:annotation>
										<xs:documentation>Información completa de los Datos del Emisor del Documento Electrónico</xs:documentation>
									</xs:annotation>
									<xs:complexType>
										<xs:sequence>
											<xs:element name="NumCedulaEmisor">
												<xs:annotation>
													<xs:documentation>Cédula Física o Jurídica del Emisor del Documento Electrónico</xs:documentation>
												</xs:annotation>
												<xs:simpleType>
													<xs:restriction base="xs:unsignedLong">
														<xs:totalDigits value="10"/>
													</xs:restriction>
												</xs:simpleType>
											</xs:element>
											<xs:element name="NombreEmisor">
												<xs:annotation>
													<xs:documentation>Nombre del la persona Física o Jurídica que emite el Documento Electrónico</xs:documentation>
												</xs:annotation>
												<xs:simpleType>
													<xs:restriction base="xs:string">
														<xs:maxLength value="80"/>
													</xs:restriction>
												</xs:simpleType>
											</xs:element>
											<xs:element name="NombreComercialEmisor">
												<xs:simpleType>
													<xs:restriction base="xs:string">
														<xs:maxLength value="80"/>
													</xs:restriction>
												</xs:simpleType>
											</xs:element>
											<xs:element name="DireccionEmisor" minOccurs="0">
												<xs:annotation>
													<xs:documentation>Esta etiqueta se debe llenar con información cuando se trata de una factura, en el caso de Nota de Crédito o Débito no será requerido</xs:documentation>
												</xs:annotation>
												<xs:simpleType>
													<xs:restriction base="xs:string">
														<xs:maxLength value="160"/>
													</xs:restriction>
												</xs:simpleType>
											</xs:element>
											<xs:element name="NumeroAreaTelEmisor" minOccurs="0">
												<xs:annotation>
													<xs:documentation>Esta etiqueta se refiere al código de área del país.</xs:documentation>
												</xs:annotation>
												<xs:simpleType>
													<xs:restriction base="xs:integer">
														<xs:totalDigits value="3"/>
													</xs:restriction>
												</xs:simpleType>
											</xs:element>
											<xs:element name="NumeroTelEmisor" minOccurs="0">
												<xs:annotation>
													<xs:documentation>Esta etiqueta se debe llenar con información cuando se trata de una factura, en el caso de Nota de Crédito o Débito no será requerido</xs:documentation>
												</xs:annotation>
												<xs:simpleType>
													<xs:restriction base="xs:integer">
														<xs:totalDigits value="8"/>
													</xs:restriction>
												</xs:simpleType>
											</xs:element>
											<xs:element name="NumeroAreaFaxEmisor" minOccurs="0">
												<xs:annotation>
													<xs:documentation>Esta etiqueta se refiere al código de área del país.</xs:documentation>
												</xs:annotation>
												<xs:simpleType>
													<xs:restriction base="xs:integer">
														<xs:totalDigits value="3"/>
													</xs:restriction>
												</xs:simpleType>
											</xs:element>
											<xs:element name="NumeroFaxEmisor" minOccurs="0">
												<xs:annotation>
													<xs:documentation>Esta etiqueta se debe llenar con información cuando se trata de una factura, en el caso de Nota de Crédito o Débito no será requerido</xs:documentation>
												</xs:annotation>
												<xs:simpleType>
													<xs:restriction base="xs:integer">
														<xs:totalDigits value="8"/>
													</xs:restriction>
												</xs:simpleType>
											</xs:element>
											<xs:element name="CorreoElectronicoEmisor" minOccurs="0">
												<xs:annotation>
													<xs:documentation>Esta etiqueta se debe llenar con información cuando se trata de una factura, en el caso de Nota de Crédito o Débito no será requerido</xs:documentation>
												</xs:annotation>
												<xs:simpleType>
													<xs:restriction base="xs:string">
														<xs:maxLength value="60"/>
													</xs:restriction>
												</xs:simpleType>
											</xs:element>
										</xs:sequence>
									</xs:complexType>
								</xs:element>
								<xs:element name="Receptor">
									<xs:annotation>
										<xs:documentation>Información de los Datos del Receptor del Documento Electrónico</xs:documentation>
									</xs:annotation>
									<xs:complexType>
										<xs:sequence>
											<xs:choice>
												<xs:element name="NumCedulaReceptor">
													<xs:annotation>
														<xs:documentation>Número de Cédula Física o Jurídica del receptor del Documento Electrónico si es nacional</xs:documentation>
													</xs:annotation>
													<xs:simpleType>
														<xs:restriction base="xs:unsignedLong">
															<xs:totalDigits value="10"/>
														</xs:restriction>
													</xs:simpleType>
												</xs:element>
												<xs:element name="IdentificacionExtranjero" minOccurs="0">
													<xs:annotation>
														<xs:documentation>Identificación de tratarce de un extranjero</xs:documentation>
													</xs:annotation>
													<xs:simpleType>
														<xs:restriction base="xs:string">
															<xs:maxLength value="20"/>
														</xs:restriction>
													</xs:simpleType>
												</xs:element>
											</xs:choice>
											<xs:element name="NombreReceptor">
												<xs:annotation>
													<xs:documentation>Nombre de la entidad Física o Jurídica que recibe el Documento Electrónico</xs:documentation>
												</xs:annotation>
												<xs:simpleType>
													<xs:restriction base="xs:string">
														<xs:maxLength value="80"/>
													</xs:restriction>
												</xs:simpleType>
											</xs:element>
											<xs:element name="DireccionReceptor" minOccurs="0">
												<xs:simpleType>
													<xs:restriction base="xs:string">
														<xs:maxLength value="160"/>
													</xs:restriction>
												</xs:simpleType>
											</xs:element>
											<xs:element name="NumeroAreaTelReceptor" minOccurs="0">
												<xs:annotation>
													<xs:documentation>Esta etiqueta se refiere al código de área del país.</xs:documentation>
												</xs:annotation>
												<xs:simpleType>
													<xs:restriction base="xs:integer">
														<xs:totalDigits value="3"/>
													</xs:restriction>
												</xs:simpleType>
											</xs:element>
											<xs:element name="NumeroTelReceptor" minOccurs="0">
												<xs:annotation>
													<xs:documentation>Número de teléfono del receptor, esta etiqueta se debe llenar con información cuando se trata de una factura, en el caso de Nota de Crédito o Débito no será requerido</xs:documentation>
												</xs:annotation>
												<xs:simpleType>
													<xs:restriction base="xs:integer">
														<xs:totalDigits value="8"/>
													</xs:restriction>
												</xs:simpleType>
											</xs:element>
											<xs:element name="NumeroTelReceptorExtranjero" minOccurs="0">
												<xs:annotation>
													<xs:documentation>Número de teléfono del receptor extranjero, esta etiqueta se debe llenar con información cuando se trata de una factura, en el caso de Nota de Crédito o Débito no será requerido</xs:documentation>
												</xs:annotation>
												<xs:simpleType>
													<xs:restriction base="xs:unsignedLong">
														<xs:totalDigits value="20"/>
													</xs:restriction>
												</xs:simpleType>
											</xs:element>
										</xs:sequence>
									</xs:complexType>
								</xs:element>
							</xs:sequence>
						</xs:complexType>
					</xs:element>
					<xs:element name="Detalle">
						<xs:annotation>
							<xs:documentation>El detalle del documento electrónico tendra un máximo de 60 líneas de detalle</xs:documentation>
						</xs:annotation>
						<xs:complexType>
							<xs:sequence maxOccurs="unbounded">
								<xs:annotation>
									<xs:documentation>El detalle del documento electrónico tendra un máximo de 60 líneas de detalle</xs:documentation>
								</xs:annotation>
								<xs:element name="Linea">
									<xs:complexType>
										<xs:sequence>
											<xs:annotation>
												<xs:documentation>El detalle del documento electrónico tendra un máximo de 60 líneas de detalle</xs:documentation>
											</xs:annotation>
											<xs:element name="NroLinDet" type="xs:integer" minOccurs="0" maxOccurs="60"/>
											<xs:element name="Codigos" minOccurs="0">
												<xs:annotation>
													<xs:documentation>Códigos del Producto o Servicio que estan reportandos en el documento electrónico</xs:documentation>
												</xs:annotation>
												<xs:complexType>
													<xs:sequence maxOccurs="5">
														<xs:element name="Codigo">
															<xs:complexType>
																<xs:sequence>
																	<xs:element name="TpoCodigo">
																		<xs:annotation>
																			<xs:documentation>Tipo de Codificación del producto o servicio. Tipos: 01 Código Vendedor,02 Código Comprador,03 Código Asignado por la Industria,04 Código Uso Interno</xs:documentation>
																		</xs:annotation>
																		<xs:simpleType>
																			<xs:restriction base="xs:int">
																				<xs:totalDigits value="2"/>
																				<xs:enumeration value="01"/>
																				<xs:enumeration value="02"/>
																				<xs:enumeration value="03"/>
																				<xs:enumeration value="04"/>
																			</xs:restriction>
																		</xs:simpleType>
																	</xs:element>
																	<xs:element name="VlrCodigo">
																		<xs:annotation>
																			<xs:documentation>Valor del Código del producto o servicio para la Codificación particular</xs:documentation>
																		</xs:annotation>
																		<xs:simpleType>
																			<xs:restriction base="xs:string">
																				<xs:maxLength value="20"/>
																			</xs:restriction>
																		</xs:simpleType>
																	</xs:element>
																</xs:sequence>
															</xs:complexType>
														</xs:element>
													</xs:sequence>
												</xs:complexType>
											</xs:element>
											<xs:element name="Cantidad" minOccurs="0">
												<xs:annotation>
													<xs:documentation>Cantidad del Producto o Servicio, será requerido para la factura, no así para la nota de crédito o débito</xs:documentation>
												</xs:annotation>
												<xs:simpleType>
													<xs:restriction base="Cantidad"/>
												</xs:simpleType>
											</xs:element>
											<xs:element name="UnidadMedida" minOccurs="0">
												<xs:annotation>
													<xs:documentation>Unidad de Medida del Producto o Servicio</xs:documentation>
												</xs:annotation>
												<xs:simpleType>
													<xs:restriction base="xs:string">
														<xs:maxLength value="13"/>
													</xs:restriction>
												</xs:simpleType>
											</xs:element>
											<xs:element name="DetalleMerc" minOccurs="0">
												<xs:annotation>
													<xs:documentation>Detalle de la Mercancía o Servicio prestado, en la factura deberá de incluirse, no así en nota de crédito o débito</xs:documentation>
												</xs:annotation>
												<xs:simpleType>
													<xs:restriction base="xs:string">
														<xs:maxLength value="160"/>
													</xs:restriction>
												</xs:simpleType>
											</xs:element>
											<xs:element name="PrecioUnitario" type="Monto" minOccurs="0">
												<xs:annotation>
													<xs:documentation>Precio Unitario del Mercancía o Servicio Prestado, será requerido para la factura no así para la nota de crédito o débito</xs:documentation>
												</xs:annotation>
											</xs:element>
											<xs:element name="MontoTotal" type="Monto" minOccurs="0">
												<xs:annotation>
													<xs:documentation>Monto Total Bruto sin Descuentos ni Impuestos, requerido para la factura no así para las notas de crédito o débito</xs:documentation>
												</xs:annotation>
											</xs:element>
											<xs:element name="MontoDescuento" type="Monto" minOccurs="0">
												<xs:annotation>
													<xs:documentation>Monto de descuento aplicado a la línea de detalle</xs:documentation>
												</xs:annotation>
											</xs:element>
											<xs:element name="NaturalezaDescuento" minOccurs="0">
												<xs:annotation>
													<xs:documentation>Es la descripción o nombre del Descuento aplicado a la línea de detalle</xs:documentation>
												</xs:annotation>
												<xs:simpleType>
													<xs:restriction base="xs:string">
														<xs:maxLength value="80"/>
													</xs:restriction>
												</xs:simpleType>
											</xs:element>
											<xs:element name="SubTotal" type="Monto" minOccurs="0">
												<xs:annotation>
													<xs:documentation>Subtotal</xs:documentation>
												</xs:annotation>
											</xs:element>
											<xs:element name="Impuestos" minOccurs="0">
												<xs:annotation>
													<xs:documentation>Impuestos aplicable a la línea de detalle</xs:documentation>
												</xs:annotation>
												<xs:complexType>
													<xs:sequence maxOccurs="unbounded">
														<xs:element name="Impuesto">
															<xs:complexType>
																<xs:sequence>
																	<xs:element name="CodigoImpuesto">
																		<xs:annotation>
																			<xs:documentation>Código de Impuesto aplicado a la línea de detalle segun tabla del Ministerio de Hacienda. Tipos: 01 Impuesto de ventas,02 Impuesto selectivo de consumo, 35 otros tributos aplicables, 40 cargo por servicio</xs:documentation>
																		</xs:annotation>
																		<xs:simpleType>
																			<xs:restriction base="xs:int">
																				<xs:totalDigits value="2"/>
																				<xs:enumeration value="01"/>
																				<xs:enumeration value="02"/>
																				<xs:enumeration value="35"/>
																				<xs:enumeration value="40"/>
																			</xs:restriction>
																		</xs:simpleType>
																	</xs:element>
																	<xs:element name="TarifaImpuesto" minOccurs="0">
																		<xs:annotation>
																			<xs:documentation>Tasa de Impuesto asociado a la codificación seleccionada aplicada a la línea de detalle</xs:documentation>
																		</xs:annotation>
																		<xs:simpleType>
																			<xs:restriction base="xs:decimal">
																				<xs:totalDigits value="4"/>
																				<xs:fractionDigits value="2"/>
																			</xs:restriction>
																		</xs:simpleType>
																	</xs:element>
																	<xs:element name="MontoImpuesto" type="Monto">
																		<xs:annotation>
																			<xs:documentation>Monto de Impuesto aplicado a la línea de detalle</xs:documentation>
																		</xs:annotation>
																	</xs:element>
																</xs:sequence>
															</xs:complexType>
														</xs:element>
													</xs:sequence>
												</xs:complexType>
											</xs:element>
										</xs:sequence>
									</xs:complexType>
								</xs:element>
							</xs:sequence>
						</xs:complexType>
					</xs:element>
					<xs:element name="TotalesFactura">
						<xs:annotation>
							<xs:documentation>Totales Finales del Documento Electrónico. Estos totales se derivan de cada una de las líneas del detalle del Documento Electrónico.</xs:documentation>
						</xs:annotation>
						<xs:complexType>
							<xs:sequence>
								<xs:element name="Moneda" default="CRC">
									<xs:annotation>
										<xs:documentation>Montos expresados en colones, conversión a: CRC Colón Costarricense, EUR Euro europeo (código EAN), GBP  Libra esterlina Gran Bretaña, JPY Yen japonés, MXN Peso Mexicano. USD Dólar Estadounidense. Si no se especifica la moneda se asignara CRC</xs:documentation>
									</xs:annotation>
									<xs:simpleType>
										<xs:restriction base="xs:string">
											<xs:maxLength value="3"/>
											<xs:enumeration value="CRC"/>
											<xs:enumeration value="EUR"/>
											<xs:enumeration value="GBP"/>
											<xs:enumeration value="JPY"/>
											<xs:enumeration value="MXN"/>
											<xs:enumeration value="USD"/>
											<xs:enumeration value=""/>
										</xs:restriction>
									</xs:simpleType>
								</xs:element>
								<xs:element name="tipoCambio" type="Monto" minOccurs="0">
									<xs:annotation>
										<xs:documentation>Tipo de cambio, la factura electrónica debe expresarse en moneda nacional</xs:documentation>
									</xs:annotation>
								</xs:element>
								<xs:element name="TotalSerGravados" type="Monto" nillable="0"/>
								<xs:element name="TotalSerExentos" type="Monto"/>
								<xs:element name="TotalMerGravadas" type="Monto"/>
								<xs:element name="TotalMerExentas" type="Monto"/>
								<xs:element name="TotalGravado" type="Monto"/>
								<xs:element name="TotalExento" type="Monto"/>
								<xs:element name="TotalVenta" type="Monto"/>
								<xs:element name="Descuentos" type="Monto"/>
								<xs:element name="TotalVentaNeta" type="Monto"/>
								<xs:element name="MontoImpConsumo" type="Monto"/>
								<xs:element name="MontoOtrosImp" type="Monto"/>
								<xs:element name="TarifaImpuesto" type="xs:decimal"/>
								<xs:element name="MontoImpVentas" type="Monto"/>
								<xs:element name="TotalFactura" type="Monto"/>
							</xs:sequence>
						</xs:complexType>
					</xs:element>
					<xs:element name="InformacionDeReferencia" minOccurs="0">
						<xs:annotation>
							<xs:documentation>Las referencias son para cuando se deben de emitir Notas de Crédito o Débito que anulan o modifican documentos anteriores </xs:documentation>
						</xs:annotation>
						<xs:complexType>
							<xs:sequence maxOccurs="10">
								<xs:element name="Referencia">
									<xs:complexType>
										<xs:sequence>
											<xs:element name="TpoDocRef" minOccurs="0">
												<xs:annotation>
													<xs:documentation>Los Tipo de Documento de Referencia definidos son:  01 Factura, 02 Nota de Débito, 03 Nota de Crédito, 05 Nota de despacho, 06 Compras autorizadas, 07 Ventas exentas a diplomáticos, 08 Orden de Compra, 09 Contrato, 10 Procedimiento, 11 Documento de Trasporte </xs:documentation>
												</xs:annotation>
												<xs:simpleType>
													<xs:restriction base="xs:int">
														<xs:totalDigits value="2"/>
														<xs:enumeration value="01"/>
														<xs:enumeration value="02"/>
														<xs:enumeration value="03"/>
														<xs:enumeration value="05"/>
														<xs:enumeration value="06"/>
														<xs:enumeration value="07"/>
														<xs:enumeration value="08"/>
														<xs:enumeration value="09"/>
														<xs:enumeration value="10"/>
														<xs:enumeration value="11"/>
													</xs:restriction>
												</xs:simpleType>
											</xs:element>
											<xs:element name="NumeroReferencia" minOccurs="0">
												<xs:annotation>
													<xs:documentation>Número del Documento de Referencia</xs:documentation>
												</xs:annotation>
												<xs:simpleType>
													<xs:restriction base="xs:string">
														<xs:minLength value="1"/>
														<xs:maxLength value="20"/>
													</xs:restriction>
												</xs:simpleType>
											</xs:element>
											<xs:element name="FechaReferencia" type="xs:dateTime" minOccurs="0">
												<xs:annotation>
													<xs:documentation>Fecha del Documento de  Referencia. En general se referencia la fecha de emisión del documento.</xs:documentation>
												</xs:annotation>
											</xs:element>
											<xs:element name="CodigoReferencia" minOccurs="0">
												<xs:annotation>
													<xs:documentation>Son los códigos de referencia definidos por la DGT: 1 Anula Documento de Referencia, 2 Corrige Texto Documento de referencia, 3 Corrige monto, 4 Referencia a otro documento</xs:documentation>
												</xs:annotation>
												<xs:simpleType>
													<xs:restriction base="xs:int">
														<xs:enumeration value="1"/>
														<xs:enumeration value="2"/>
														<xs:enumeration value="3"/>
														<xs:enumeration value="4"/>
													</xs:restriction>
												</xs:simpleType>
											</xs:element>
											<xs:element name="RazonReferencia" minOccurs="0">
												<xs:annotation>
													<xs:documentation>Texto para aclaraciones adicionales</xs:documentation>
												</xs:annotation>
												<xs:simpleType>
													<xs:restriction base="xs:string">
														<xs:maxLength value="180"/>
													</xs:restriction>
												</xs:simpleType>
											</xs:element>
										</xs:sequence>
									</xs:complexType>
								</xs:element>
							</xs:sequence>
						</xs:complexType>
					</xs:element>
					<xs:element name="Autorizacion">
						<xs:annotation>
							<xs:documentation>Etiqueta para anotar el número de resolución de la DGT</xs:documentation>
						</xs:annotation>
						<xs:complexType>
							<xs:attribute name="NumResolucion" use="required">
								<xs:annotation>
									<xs:documentation>Número de resolución como usuario de documentos electrónicos</xs:documentation>
								</xs:annotation>
								<xs:simpleType>
									<xs:restriction base="xs:string">
										<xs:maxLength value="13"/>
									</xs:restriction>
								</xs:simpleType>
							</xs:attribute>
							<xs:attribute name="FechaResolución" type="xs:dateTime" use="required">
								<xs:annotation>
									<xs:documentation>Fecha y Hora de la resolución emitida por la DGT al usuario</xs:documentation>
								</xs:annotation>
							</xs:attribute>
						</xs:complexType>
					</xs:element>
					<xs:element name="Otros" type="xs:string" minOccurs="0">
						<xs:annotation>
							<xs:documentation>Etiqueta para ser utilizada en el Intercambio Electrónico de Datos</xs:documentation>
						</xs:annotation>
					</xs:element>
				</xs:sequence>
				<xs:element name="FirmaDigital">
					<xs:annotation>
						<xs:documentation>Firma Digital del Documento Electrónico usando el formato pkcs#7, consultar anexo 3</xs:documentation>
					</xs:annotation>
					<xs:complexType>
						<xs:sequence>
							<xs:element name="firma" type="xs:base64Binary">
								<xs:annotation>
									<xs:documentation>Firma del documento electrónico expresada en base64</xs:documentation>
								</xs:annotation>
							</xs:element>
							<xs:element name="x509Certificado" type="xs:base64Binary">
								<xs:annotation>
									<xs:documentation>Certificado de llave pública que se uso para firmar el documento electrónico expresada en base64</xs:documentation>
								</xs:annotation>
							</xs:element>
						</xs:sequence>
					</xs:complexType>
				</xs:element>
			</xs:sequence>
		</xs:complexType>
	</xs:element>
	<xs:simpleType name="Monto">
		<xs:annotation>
			<xs:documentation>Tipo de dato Utilizado para montos</xs:documentation>
		</xs:annotation>
		<xs:restriction base="xs:decimal">
			<xs:totalDigits value="28"/>
			<xs:fractionDigits value="8"/>
		</xs:restriction>
	</xs:simpleType>
	<xs:simpleType name="Cantidad">
		<xs:annotation>
			<xs:documentation>Tipo de dato Utilizado para cantidades</xs:documentation>
		</xs:annotation>
		<xs:restriction base="xs:decimal">
			<xs:totalDigits value="28"/>
			<xs:fractionDigits value="8"/>
		</xs:restriction>
	</xs:simpleType>
</xs:schema>
'."\n";
