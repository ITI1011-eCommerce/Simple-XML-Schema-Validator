<?php

/**
 * Author: Randall Castillo
 * Author URL: http://www.randallcastillo.me
 * Date: 11/03/2017
 * Time: 09:43 AM
 */

$xml_str = '<?xml version="1.0" encoding="utf-8"?>
<FacturaElectronicaXML xmlns="https://tribunet.hacienda.go.cr/docs/esquemas/2011/v3_1">
  <Encabezado>
    <VersionDoc>1</VersionDoc>
    <TipoDoc>01</TipoDoc>
    <NumConsecutivoCompr>00100001010000000001</NumConsecutivoCompr>
    <FechaEmisionDoc>1900-01-01T01:01:01-06:00</FechaEmisionDoc>
    <CondicionVenta>01</CondicionVenta>
    <Emisor>
      <NumCedulaEmisor>0</NumCedulaEmisor>
      <NombreEmisor>NombreEmisor1</NombreEmisor>
      <NombreComercialEmisor>NombreComercialEmisor1</NombreComercialEmisor>
      <DireccionEmisor>DireccionEmisor1</DireccionEmisor>
      <NumeroAreaTelEmisor>1</NumeroAreaTelEmisor>
      <NumeroTelEmisor>1</NumeroTelEmisor>
      <NumeroAreaFaxEmisor>1</NumeroAreaFaxEmisor>
      <NumeroFaxEmisor>1</NumeroFaxEmisor>
      <CorreoElectronicoEmisor>CorreoElectronicoEmisor1</CorreoElectronicoEmisor>
    </Emisor>
    <Receptor>
      <NumCedulaReceptor>0</NumCedulaReceptor>
      <NombreReceptor>NombreReceptor1</NombreReceptor>
      <DireccionReceptor>DireccionReceptor1</DireccionReceptor>
      <NumeroAreaTelReceptor>1</NumeroAreaTelReceptor>
      <NumeroTelReceptor>1</NumeroTelReceptor>
      <NumeroTelReceptorExtranjero>0</NumeroTelReceptorExtranjero>
    </Receptor>
  </Encabezado>
  <Detalle>
    <Linea>
      <NroLinDet>1</NroLinDet>
      <Codigos>
        <Codigo>
          <TpoCodigo>1</TpoCodigo>
          <VlrCodigo>VlrCodigo1</VlrCodigo>
        </Codigo>
        <Codigo>
          <TpoCodigo>2</TpoCodigo>
          <VlrCodigo>VlrCodigo2</VlrCodigo>
        </Codigo>
        <Codigo>
          <TpoCodigo>3</TpoCodigo>
          <VlrCodigo>VlrCodigo3</VlrCodigo>
        </Codigo>
      </Codigos>
      <Cantidad>1</Cantidad>
      <UnidadMedida>UnidadMedida1</UnidadMedida>
      <DetalleMerc>DetalleMerc1</DetalleMerc>
      <PrecioUnitario>1</PrecioUnitario>
      <MontoTotal>1</MontoTotal>
      <MontoDescuento>1</MontoDescuento>
      <NaturalezaDescuento>NaturalezaDescuento1</NaturalezaDescuento>
      <SubTotal>1</SubTotal>
      <Impuestos>
        <Impuesto>
          <CodigoImpuesto>1</CodigoImpuesto>
          <TarifaImpuesto>1</TarifaImpuesto>
          <MontoImpuesto>1</MontoImpuesto>
        </Impuesto>
        <Impuesto>
          <CodigoImpuesto>2</CodigoImpuesto>
          <TarifaImpuesto>-99.99</TarifaImpuesto>
          <MontoImpuesto>-100000000000000000000</MontoImpuesto>
        </Impuesto>
        <Impuesto>
          <CodigoImpuesto>35</CodigoImpuesto>
          <TarifaImpuesto>99.99</TarifaImpuesto>
          <MontoImpuesto>100000000000000000000</MontoImpuesto>
        </Impuesto>
      </Impuestos>
    </Linea>
    <Linea>
      <NroLinDet>2</NroLinDet>
      <Codigos>
        <Codigo>
          <TpoCodigo>4</TpoCodigo>
          <VlrCodigo>VlrCodigo4</VlrCodigo>
        </Codigo>
        <Codigo>
          <TpoCodigo>1</TpoCodigo>
          <VlrCodigo>VlrCodigo5</VlrCodigo>
        </Codigo>
        <Codigo>
          <TpoCodigo>2</TpoCodigo>
          <VlrCodigo>VlrCodigo6</VlrCodigo>
        </Codigo>
      </Codigos>
      <Cantidad>-100000000000000000000</Cantidad>
      <UnidadMedida>UnidadMedida2</UnidadMedida>
      <DetalleMerc>DetalleMerc2</DetalleMerc>
      <PrecioUnitario>-100000000000000000000</PrecioUnitario>
      <MontoTotal>-100000000000000000000</MontoTotal>
      <MontoDescuento>-100000000000000000000</MontoDescuento>
      <NaturalezaDescuento>NaturalezaDescuento2</NaturalezaDescuento>
      <SubTotal>-100000000000000000000</SubTotal>
      <Impuestos>
        <Impuesto>
          <CodigoImpuesto>40</CodigoImpuesto>
          <TarifaImpuesto>0.99</TarifaImpuesto>
          <MontoImpuesto>123.45</MontoImpuesto>
        </Impuesto>
        <Impuesto>
          <CodigoImpuesto>1</CodigoImpuesto>
          <TarifaImpuesto>1.01</TarifaImpuesto>
          <MontoImpuesto>123.45</MontoImpuesto>
        </Impuesto>
        <Impuesto>
          <CodigoImpuesto>2</CodigoImpuesto>
          <TarifaImpuesto>-99.98</TarifaImpuesto>
          <MontoImpuesto>-100000000000000000000</MontoImpuesto>
        </Impuesto>
      </Impuestos>
    </Linea>
    <Linea>
      <NroLinDet>3</NroLinDet>
      <Codigos>
        <Codigo>
          <TpoCodigo>3</TpoCodigo>
          <VlrCodigo>VlrCodigo7</VlrCodigo>
        </Codigo>
        <Codigo>
          <TpoCodigo>4</TpoCodigo>
          <VlrCodigo>VlrCodigo8</VlrCodigo>
        </Codigo>
        <Codigo>
          <TpoCodigo>1</TpoCodigo>
          <VlrCodigo>VlrCodigo9</VlrCodigo>
        </Codigo>
      </Codigos>
      <Cantidad>100000000000000000000</Cantidad>
      <UnidadMedida>UnidadMedida3</UnidadMedida>
      <DetalleMerc>DetalleMerc3</DetalleMerc>
      <PrecioUnitario>100000000000000000000</PrecioUnitario>
      <MontoTotal>100000000000000000000</MontoTotal>
      <MontoDescuento>100000000000000000000</MontoDescuento>
      <NaturalezaDescuento>NaturalezaDescuento3</NaturalezaDescuento>
      <SubTotal>100000000000000000000</SubTotal>
      <Impuestos>
        <Impuesto>
          <CodigoImpuesto>35</CodigoImpuesto>
          <TarifaImpuesto>99.98</TarifaImpuesto>
          <MontoImpuesto>100000000000000000000</MontoImpuesto>
        </Impuesto>
        <Impuesto>
          <CodigoImpuesto>40</CodigoImpuesto>
          <TarifaImpuesto>0.98</TarifaImpuesto>
          <MontoImpuesto>123.45</MontoImpuesto>
        </Impuesto>
        <Impuesto>
          <CodigoImpuesto>1</CodigoImpuesto>
          <TarifaImpuesto>1.02</TarifaImpuesto>
          <MontoImpuesto>123.45</MontoImpuesto>
        </Impuesto>
      </Impuestos>
    </Linea>
  </Detalle>
  <TotalesFactura>
    <Moneda>CRC</Moneda>
    <tipoCambio>1</tipoCambio>
    <TotalSerGravados>1</TotalSerGravados>
    <TotalSerExentos>1</TotalSerExentos>
    <TotalMerGravadas>1</TotalMerGravadas>
    <TotalMerExentas>1</TotalMerExentas>
    <TotalGravado>1</TotalGravado>
    <TotalExento>1</TotalExento>
    <TotalVenta>1</TotalVenta>
    <Descuentos>1</Descuentos>
    <TotalVentaNeta>1</TotalVentaNeta>
    <MontoImpConsumo>1</MontoImpConsumo>
    <MontoOtrosImp>1</MontoOtrosImp>
    <TarifaImpuesto>1</TarifaImpuesto>
    <MontoImpVentas>1</MontoImpVentas>
    <TotalFactura>1</TotalFactura>
  </TotalesFactura>
  <InformacionDeReferencia>
    <Referencia>
      <TpoDocRef>1</TpoDocRef>
      <NumeroReferencia>NumeroReferencia1</NumeroReferencia>
      <FechaReferencia>1900-01-01T01:01:01-06:00</FechaReferencia>
      <CodigoReferencia>1</CodigoReferencia>
      <RazonReferencia>RazonReferencia1</RazonReferencia>
    </Referencia>
    <Referencia>
      <TpoDocRef>2</TpoDocRef>
      <NumeroReferencia>NumeroReferencia2</NumeroReferencia>
      <FechaReferencia>0001-01-01T00:00:00-06:00</FechaReferencia>
      <CodigoReferencia>2</CodigoReferencia>
      <RazonReferencia>RazonReferencia2</RazonReferencia>
    </Referencia>
    <Referencia>
      <TpoDocRef>3</TpoDocRef>
      <NumeroReferencia>NumeroReferencia3</NumeroReferencia>
      <FechaReferencia>9999-12-31T23:59:59.9999999-06:00</FechaReferencia>
      <CodigoReferencia>3</CodigoReferencia>
      <RazonReferencia>RazonReferencia3</RazonReferencia>
    </Referencia>
  </InformacionDeReferencia>
  <Autorizacion NumResolucion="NumResolucio1" FechaResolución="1900-01-01T01:01:01-06:00" />
  <Otros>Otros1</Otros>
  <FirmaDigital>
    <firma>RANDALLFBgcICQoLDA0ODw==</firma>
    <x509Certificado>RANDALLFBgcICQoLDA0ODw==</x509Certificado>
  </FirmaDigital>
</FacturaElectronicaXML>'."\n";
