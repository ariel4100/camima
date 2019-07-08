<?php

use Illuminate\Database\Seeder;

class ContentsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('Contents')->delete();
        
        \DB::table('Contents')->insert(array (
            0 => 
            array (
                'id' => 1,
                'section' => 'home',
                'text' => NULL,
                'image' => NULL,
                'video' => NULL,
                'order' => NULL,
                'created_at' => '2019-07-02 14:22:12',
                'updated_at' => '2019-07-02 14:22:12',
            ),
            1 => 
            array (
                'id' => 2,
                'section' => 'nosotros',
                'text' => '{"section":"nosotros","title_es":"QUIENES SOMOS","text_es":"<p>Somos una entidad representativa con m&aacute;s de 70 a&ntilde;os de trayectoria. Una entidad sin fines de lucro, con acreditado prestigio en el gremialismo empresario, con un vasto n&uacute;mero de empresas asociadas pertenecientes a la mayor&iacute;a de las especialidades de la industria metal&uacute;rgica.<\\/p>\\r\\n\\r\\n<p>La Resoluci&oacute;n 98\\/2003 del Ministerio de Trabajo, Empleo y Seguridad Social establece expresamente que&nbsp;<em><strong>los socios de nuestra C&aacute;mara NO est&aacute;n obligados al pago de ning&uacute;n aporte sobre la masa salarial bruta de la empresa<\\/strong><\\/em>.<\\/p>"}',
                'image' => NULL,
                'video' => NULL,
                'order' => NULL,
                'created_at' => '2019-07-02 18:22:40',
                'updated_at' => '2019-07-03 11:40:15',
            ),
            2 => 
            array (
                'id' => 3,
                'section' => 'cursosyreuniones',
                'text' => NULL,
                'image' => NULL,
                'video' => NULL,
                'order' => NULL,
                'created_at' => '2019-07-02 19:34:38',
                'updated_at' => '2019-07-02 19:34:38',
            ),
            3 => 
            array (
                'id' => 5,
                'section' => 'objetivos',
                'text' => '{"section":"objetivos","title_es":"OBJETIVOS","subtext_es":"<h1 style=\\"text-align:center\\"><span style=\\"color:#133165\\">En nuestra c&aacute;mara&nbsp;<strong>PERTENECER&nbsp;<\\/strong>es<\\/span><\\/h1>\\r\\n\\r\\n<h1 style=\\"text-align:center\\"><span style=\\"color:#133165\\">sin&oacute;nimo de&nbsp;<strong>CRECER<\\/strong><\\/span><\\/h1>","text_es":"<p>- Defender los intereses de las industrias que agrupa.<\\/p>\\r\\n\\r\\n<p>- Propugnar el desarrollo, consolidaci&oacute;n y perfeccionamiento y prestigio de la industria metal&uacute;rgica nacional proponiendo y apoyando acciones o iniciativas que contribuyan a su progreso.<\\/p>\\r\\n\\r\\n<p>- Promover y contribuir al mejoramiento t&eacute;cnico y social de los empleados y obreros de sus asociados.<\\/p>\\r\\n\\r\\n<p>- Asumir ante los poderes p&uacute;blicos o ante cualquier otra instituci&oacute;n de car&aacute;cter oficial o privado la representaci&oacute;n de los intereses de la industria metal&uacute;rgica en general y los de la industria que agrupa en particular, gestionando la soluci&oacute;n de los problemas que la afecten.<\\/p>\\r\\n\\r\\n<p>- Mejorar la actividad productiva y comercial de la industria metal&uacute;rgica y afines, a trav&eacute;s de la promoci&oacute;n y fomento de la investigaci&oacute;n y desarrollo, la transmisi&oacute;n de tecnolog&iacute;a, la asistencia t&eacute;cnica y todos aquellos hechos innovadores que contribuyan a lograr mayor avance del sector.<\\/p>\\r\\n\\r\\n<p>- Asesorar y participar cuando resulte conveniente en el estudio de cuestiones sociales, econ&oacute;micas, financieras, legales, gremiales, t&eacute;cnicas etc. atinentes a la industria metal&uacute;rgica.<\\/p>\\r\\n\\r\\n<p>- Respetar y hacer respetar los principios establecidos en la letra y en el esp&iacute;ritu de la Constituci&oacute;n Nacional y de la Declaraci&oacute;n de los Derechos Humanos.<\\/p>"}',
                'image' => NULL,
                'video' => NULL,
                'order' => NULL,
                'created_at' => '2019-07-03 11:42:37',
                'updated_at' => '2019-07-03 11:45:25',
            ),
            4 => 
            array (
                'id' => 6,
                'section' => 'misionyvision',
                'text' => '{"section":"misionyvision","title_es":"MISI\\u00d3N Y VISI\\u00d3N","text_es":"<h1 style=\\"text-align:center\\"><span style=\\"color:#133165\\">Trabajar con eficiencia para poder brindar un servicio de calidad para nuestros asociados.<\\/span><\\/h1>"}',
                'image' => NULL,
                'video' => NULL,
                'order' => NULL,
                'created_at' => '2019-07-03 11:45:31',
                'updated_at' => '2019-07-03 11:47:05',
            ),
            5 => 
            array (
                'id' => 7,
                'section' => 'autoridades',
                'text' => '{"section":"autoridades","title_es":"AUTORIDADES\\/COMISION DIRECTIVA","gallery":[{"image":"uploads\\/autoridades\\/xouMDnMnGt7CicOxe6UKrSo599ZpIHUYZUZCte47.jpeg","title_es":"Sr. Jos\\u00e9 Luis Ammaturo","position_es":"PRESIDENTE"},{"image":null,"title_es":"Sr. Pablo Reale","position_es":"VICEPRESIDENTE"},{"image":null,"title_es":"Sra. Roxana Petrecca","position_es":"VICEPRESIDENTE"},{"image":null,"title_es":"Sr. Aldo Lo Russo","position_es":"SECRETARIO GRAL."},{"image":null,"title_es":"Sra. Silvia Calaresu","position_es":"PROSECRETARIA GRAL."},{"image":null,"title_es":"Sr. Alberto Gesell","position_es":"SECRETARIO GREMIAL"},{"image":null,"title_es":"Sr. Fabio de Leo","position_es":"PROSECRETARIO GREMIAL"},{"image":null,"title_es":"Sr. Raquel Stezovsky","position_es":"TESORERO"},{"image":null,"title_es":"Sr. Roberto Patini","position_es":"TESORERO"},{"image":null,"title_es":"Sr. Alejandro Camb\\u00f3n","position_es":"VOCALES TITULARES"},{"image":null,"title_es":"Sr. Claudio Chiara","position_es":"VOCALES TITULARES"},{"image":null,"title_es":"Sr. Martin Zocchio","position_es":"VOCALES TITULARES"},{"image":null,"title_es":"Sr. Marcelo Fern\\u00e1ndez","position_es":"VOCALES TITULARES"},{"image":null,"title_es":"Sr. Ruben Pulice","position_es":"VOCALES TITULARES"}]}',
                'image' => '[{"image":"uploads\\/autoridades\\/xouMDnMnGt7CicOxe6UKrSo599ZpIHUYZUZCte47.jpeg","title_es":"Sr. Jos\\u00e9 Luis Ammaturo","position_es":"PRESIDENTE"},{"image":"","title_es":"Sr. Pablo Reale","position_es":"VICEPRESIDENTE"},{"image":"","title_es":"Sra. Roxana Petrecca","position_es":"VICEPRESIDENTE"},{"image":"","title_es":"Sr. Aldo Lo Russo","position_es":"SECRETARIO GRAL."},{"image":"","title_es":"Sra. Silvia Calaresu","position_es":"PROSECRETARIA GRAL."},{"image":"","title_es":"Sr. Alberto Gesell","position_es":"SECRETARIO GREMIAL"},{"image":"","title_es":"Sr. Fabio de Leo","position_es":"PROSECRETARIO GREMIAL"},{"image":"","title_es":"Sr. Raquel Stezovsky","position_es":"TESORERO"},{"image":"","title_es":"Sr. Roberto Patini","position_es":"TESORERO"},{"image":"","title_es":"Sr. Alejandro Camb\\u00f3n","position_es":"VOCALES TITULARES"},{"image":"","title_es":"Sr. Claudio Chiara","position_es":"VOCALES TITULARES"},{"image":"","title_es":"Sr. Martin Zocchio","position_es":"VOCALES TITULARES"},{"image":"","title_es":"Sr. Marcelo Fern\\u00e1ndez","position_es":"VOCALES TITULARES"},{"image":"","title_es":"Sr. Ruben Pulice","position_es":"VOCALES TITULARES"}]',
                'video' => NULL,
                'order' => NULL,
                'created_at' => '2019-07-03 11:48:36',
                'updated_at' => '2019-07-03 17:23:31',
            ),
            6 => 
            array (
                'id' => 8,
                'section' => 'interes',
            'text' => '{"section":"interes","title_es":"ENLACES DE INTER\\u00c9S","gallery":[{"image":"uploads\\/interes\\/Dpl2wErHM2LCfDhKHU7KJoXHgOZsdLW8TWxnvRQd.png","title_es":"Administraci\\u00f3n Federal d e Ingresos P\\u00fablicos (AFIP)","link":"http:\\/\\/www.afip.gov.ar"},{"image":"uploads\\/interes\\/3xsUpCOcXeUG5Gu05V6X1OE6hDlrRGn4xzSlcmKg.png","title_es":"Banco Central de la Rep\\u00fablica Argentina (BCRA)","link":"http:\\/\\/www.bcra.gov.ar"},{"image":"uploads\\/interes\\/QimoBZCIT8jmlae11TDdvdIjpsOFLI2TodEWNTkR.png","title_es":"Banco de Inversi\\u00f3n y Comercio Exterior (BICE)","link":"http:\\/\\/www.bice.com.ar"},{"image":"uploads\\/interes\\/fDiMwMkhkAKcAVZ5XFlfpxgvzChJ8f1CgThIE1rE.png","title_es":"Canciller\\u00eda Argentina","link":"http:\\/\\/www.mrecic.gov.ar"},{"image":"uploads\\/interes\\/ebrqyVpidvtnOrzjv7kkC2oNaNfHWK3WBH7S5eAd.png","title_es":"Fundaci\\u00f3n ExportAR","link":"http:\\/\\/www.exportar.org.ar"},{"image":"uploads\\/interes\\/7zftTdc08GMTkpdc4fq9CXa9bXwaE4quIx3RzdHO.png","title_es":"Mercado Com\\u00fan del Sur (MERCOSUR)","link":"http:\\/\\/www.mercosur.org.uy"},{"image":{},"title_es":"Ministerio de Econom\\u00eda y Producci\\u00f3n","link":"http:\\/\\/www.mecon.gov.ar"},{"image":{},"title_es":"Ministerio de Trabajo, Empleo y Seguridad Social","link":"http:\\/\\/www.trabajo.gov.ar"}]}',
            'image' => '[{"image":"uploads\\/interes\\/Dpl2wErHM2LCfDhKHU7KJoXHgOZsdLW8TWxnvRQd.png","title_es":"Administraci\\u00f3n Federal d e Ingresos P\\u00fablicos (AFIP)","link":"http:\\/\\/www.afip.gov.ar"},{"image":"uploads\\/interes\\/3xsUpCOcXeUG5Gu05V6X1OE6hDlrRGn4xzSlcmKg.png","title_es":"Banco Central de la Rep\\u00fablica Argentina (BCRA)","link":"http:\\/\\/www.bcra.gov.ar"},{"image":"uploads\\/interes\\/QimoBZCIT8jmlae11TDdvdIjpsOFLI2TodEWNTkR.png","title_es":"Banco de Inversi\\u00f3n y Comercio Exterior (BICE)","link":"http:\\/\\/www.bice.com.ar"},{"image":"uploads\\/interes\\/fDiMwMkhkAKcAVZ5XFlfpxgvzChJ8f1CgThIE1rE.png","title_es":"Canciller\\u00eda Argentina","link":"http:\\/\\/www.mrecic.gov.ar"},{"image":"uploads\\/interes\\/ebrqyVpidvtnOrzjv7kkC2oNaNfHWK3WBH7S5eAd.png","title_es":"Fundaci\\u00f3n ExportAR","link":"http:\\/\\/www.exportar.org.ar"},{"image":"uploads\\/interes\\/7zftTdc08GMTkpdc4fq9CXa9bXwaE4quIx3RzdHO.png","title_es":"Mercado Com\\u00fan del Sur (MERCOSUR)","link":"http:\\/\\/www.mercosur.org.uy"},{"image":"uploads\\/interes\\/OR3qbGl0F5brFZ9peB24tb6ICXaa2dKxeB8nJsVF.png","title_es":"Ministerio de Econom\\u00eda y Producci\\u00f3n","link":"http:\\/\\/www.mecon.gov.ar"},{"image":"uploads\\/interes\\/rPO9cH0Bstm2Bn3FSNfZZSzTL79VhDzhPmgdudmw.png","title_es":"Ministerio de Trabajo, Empleo y Seguridad Social","link":"http:\\/\\/www.trabajo.gov.ar"}]',
                'video' => NULL,
                'order' => NULL,
                'created_at' => '2019-07-03 12:23:51',
                'updated_at' => '2019-07-03 12:38:01',
            ),
            7 => 
            array (
                'id' => 9,
                'section' => 'nuestrasede',
            'text' => '{"section":"nuestrasede","title_es":"NUESTRA SEDE","text_es":"<h2><span style=\\"color:#133165\\">Moderna sede social<\\/span><\\/h2>\\r\\n\\r\\n<h4>En el edificio de Hipolito Yrigoyen 1628 5&ordm; piso frente a la plaza de los 2 congresos. Amplio sal&oacute;n de Actos para Eventos y Seminarios. Oficinas aptas para reuniones de negocios. F&aacute;cil acceso por todos los medios de transporte. Amplias y pr&oacute;ximas playas de estacionamiento p&uacute;blico.<\\/h4>","text_2":"<h2><span style=\\"color:#133165\\">Infraestructura operativa<\\/span><\\/h2>","text_3":"<h2><span style=\\"color:#133165\\">Din&aacute;mico equipo de trabajo<\\/span><\\/h2>","gallery":[{"image":"uploads\\/nuestrasede\\/wSAplI43JiL1kYhw29gvRZPFwc93xitVP6bBCGSU.png","title_es":"Asesoramiento especializado permanente (personal, telef\\u00f3nico, fax)"},{"image":"uploads\\/nuestrasede\\/GbRWrPYKVwVHLaRKWB3OU6w7KXabOWA4W2HpY6zZ.png","title_es":"Promoci\\u00f3n Comercial en el mercado interno y externo"},{"image":"uploads\\/nuestrasede\\/iIxR9QWcyn02xvGG1GDMGF9sPYbWCMZGO91FBxNd.png","title_es":"Bolet\\u00edn informativo mensual"},{"image":"uploads\\/nuestrasede\\/aSmnwUf6jMOa9XFEqmB8D0ffLwwvGNi6NGQhp6qg.png","title_es":"Publicidad en Internet"},{"image":"uploads\\/nuestrasede\\/QJkMinwO8sP8JVI1dy9cbocerSAqU4CiMWqPcq1l.png","title_es":"Seguros - Coberturas con importantes bonificaciones"},{"image":"uploads\\/nuestrasede\\/QFHBudTYQBo1ZUdoMU9zW7VHqmV8IkIaWGgo0fKB.png","title_es":"Instalaciones para reuniones y entrevistas empresarias."}],"image":"uploads\\/nuestrasede\\/img\\/kM96W897gCMOcfy8hOcdtEVC1PBPOLIPDxZ6F49B.jpeg"}',
            'image' => '[{"image":"uploads\\/nuestrasede\\/wSAplI43JiL1kYhw29gvRZPFwc93xitVP6bBCGSU.png","title_es":"Asesoramiento especializado permanente (personal, telef\\u00f3nico, fax)"},{"image":"uploads\\/nuestrasede\\/GbRWrPYKVwVHLaRKWB3OU6w7KXabOWA4W2HpY6zZ.png","title_es":"Promoci\\u00f3n Comercial en el mercado interno y externo"},{"image":"uploads\\/nuestrasede\\/iIxR9QWcyn02xvGG1GDMGF9sPYbWCMZGO91FBxNd.png","title_es":"Bolet\\u00edn informativo mensual"},{"image":"uploads\\/nuestrasede\\/aSmnwUf6jMOa9XFEqmB8D0ffLwwvGNi6NGQhp6qg.png","title_es":"Publicidad en Internet"},{"image":"uploads\\/nuestrasede\\/QJkMinwO8sP8JVI1dy9cbocerSAqU4CiMWqPcq1l.png","title_es":"Seguros - Coberturas con importantes bonificaciones"},{"image":"uploads\\/nuestrasede\\/QFHBudTYQBo1ZUdoMU9zW7VHqmV8IkIaWGgo0fKB.png","title_es":"Instalaciones para reuniones y entrevistas empresarias."}]',
                'video' => NULL,
                'order' => NULL,
                'created_at' => '2019-07-03 17:29:10',
                'updated_at' => '2019-07-03 18:24:26',
            ),
            8 => 
            array (
                'id' => 10,
                'section' => 'asesorias',
                'text' => '{"section":"asesorias","title_es":"ASESOR\\u00cdAS","gallery":[{"image":{},"title_es":"ASUNTOS LABORALES"},{"image":{},"title_es":"ASUNTOS LEGALES"},{"image":{},"title_es":"REGIMEN PREVISIONAL"},{"image":{},"title_es":"COMERCIO EXT.-ADUANA"},{"image":{},"title_es":"PRODUCT.-CALIDAD COSTOS"},{"image":{},"title_es":"CONTABLE-IMPOSITIVO"},{"image":{},"title_es":"SEGURIDAD E HGIENE"},{"image":{},"title_es":"INFORMATICA"},{"image":{},"title_es":"CAPACITACIONES"},{"image":{},"title_es":"SEGUROS"},{"image":{},"title_es":"UNID. DE VINCULACION TECN."}],"image":null}',
                'image' => '[{"image":"uploads\\/asesorias\\/QostJKWZBxjMs0NkIihLclg4Rdxp4LTtvdFD65Zv.png","title_es":"ASUNTOS LABORALES"},{"image":"uploads\\/asesorias\\/4PXJQdNUD5LKnxOToOLHFjYGrQC38VYincyYBbcQ.png","title_es":"ASUNTOS LEGALES"},{"image":"uploads\\/asesorias\\/R3zkGan3KxiR0iEwByfUHvvcNSqIhMGvtgktnECN.png","title_es":"REGIMEN PREVISIONAL"},{"image":"uploads\\/asesorias\\/IyCFdh32QNo6l5VdXgBqDSzrIfY31noC6Mop5FGo.png","title_es":"COMERCIO EXT.-ADUANA"},{"image":"uploads\\/asesorias\\/YYnen0jVsqIzeUASn9MeqLgs6bcTruYGB1SGUNHx.png","title_es":"PRODUCT.-CALIDAD COSTOS"},{"image":"uploads\\/asesorias\\/8J5NDUexrqL9QpObm9Mpf4gA0aYLxUubJQDScjYb.png","title_es":"CONTABLE-IMPOSITIVO"},{"image":"uploads\\/asesorias\\/FpfmhpFanLSEz2UvxBK7srTDaUTCiFVwDg5ncpjr.png","title_es":"SEGURIDAD E HGIENE"},{"image":"uploads\\/asesorias\\/4J8FmI6ztUWKxnY2deXOyCDf6bUXuPvrcqTuhLcl.png","title_es":"INFORMATICA"},{"image":"uploads\\/asesorias\\/PRAAFSnjDCIQkrFXKG9VDNCrLr4hFWb19R21IfaN.png","title_es":"CAPACITACIONES"},{"image":"uploads\\/asesorias\\/F3grA1wDKsACtMaHxZYCRvKR8Hph6ICEUQ59syQW.png","title_es":"SEGUROS"},{"image":"uploads\\/asesorias\\/qYcpVZJeewS8V5efKuRONIkOHZWwowrSkJms47Gk.png","title_es":"UNID. DE VINCULACION TECN."}]',
                'video' => NULL,
                'order' => NULL,
                'created_at' => '2019-07-03 18:31:50',
                'updated_at' => '2019-07-03 18:36:46',
            ),
            9 => 
            array (
                'id' => 11,
                'section' => 'uom',
                'text' => NULL,
                'image' => NULL,
                'video' => NULL,
                'order' => NULL,
                'created_at' => '2019-07-05 14:50:36',
                'updated_at' => '2019-07-05 14:50:36',
            ),
        ));
        
        
    }
}