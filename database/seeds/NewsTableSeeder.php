<?php

use Illuminate\Database\Seeder;

class NewsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('News')->delete();
        
        \DB::table('News')->insert(array (
            0 => 
            array (
                'id' => 5,
                'titulo' => 'Fomentar la inserción laboral con capacitación',
                'descripcion' => '<p>La reciente iniciativa del Gobierno para facilitar el acceso al mercado laboral a quienes perciben alg&uacute;n tipo de programa social apunta, con certeza, a una arista fundamental en el desarrollo nacional, como es la inclusi&oacute;n en el circuito formal de miles de trabajadores que no deben ni pueden vivir de una ayuda estatal como sustento estructural.<br />
<br />
El pa&iacute;s necesita del esfuerzo de todos los argentinos para levantarse y crecer. Por un lado, adem&aacute;s del beneficio que supone para los futuros empleados, el Plan Empalme es una medida positiva para las empresas y, fundamentalmente, para las pymes, que ver&aacute;n allanado el camino para la contrataci&oacute;n de personal, que en muchos casos se convierte en una traba para la expansi&oacute;n de las peque&ntilde;as y medianas compa&ntilde;&iacute;as.&nbsp;<br />
<br />
En cierto modo, tambi&eacute;n promover&aacute; que el Gobierno pueda minimizar sus gastos fiscales reduciendo la carga que provocan los subsidios, situaci&oacute;n que deber&iacute;a trasladarse a una baja en las cargas impositivas, que hoy son el problema m&aacute;s acuciante de cualquier peque&ntilde;o o mediano empresario.<br />
<br />
Si bien el proyecto suena provechoso para todos los actores que entran en juego en esta ecuaci&oacute;n, hay un aspecto determinante en el actual mercado laboral, din&aacute;mico y cambiante al ritmo de los avances tecnol&oacute;gicos, que no es contemplado: la capacitaci&oacute;n y la preparaci&oacute;n.<br />
<br />
Desde Camima entendemos que es importante implementar todas las herramientas que est&eacute;n al alcance para dinamizar el mercado formal de trabajo y favorecer la inclusi&oacute;n de, cada vez, m&aacute;s argentinos; sin embargo, la problem&aacute;tica no se termina all&iacute;.&nbsp;<br />
<br />
Vivimos en un mundo que pocos a&ntilde;os atr&aacute;s era impensado, modelado por el avance de la tecnolog&iacute;a, que tambi&eacute;n ha revolucionado los m&eacute;todos de producci&oacute;n y, por consiguiente, las necesidades de las pymes. Se prev&eacute; que en los pr&oacute;ximos 30 a&ntilde;os, el 50% de las labores que se realizan en la actualidad desaparezcan como tales y se reconviertan en empleos totalmente nuevos, con la tecnolog&iacute;a como eje fundamental. Es por eso que debemos estar preparados y formar a los nuevos empleados bajo los m&aacute;s avanzados est&aacute;ndares, para desarrollar las capacidades que ser&aacute;n necesarias en el escenario futuro y no correr desde atr&aacute;s de un cambio que sucede d&iacute;a tras d&iacute;a.<br />
<br />
Es importante contemplar el costo que tiene la capacitaci&oacute;n del personal y que, probablemente, estas personas que permanecieron fuera del mercado formal durante muchos a&ntilde;os no poseen los conocimientos y las especializaciones necesarias para llevar adelante actividades laborales que requieren altos grados de especificidad.&nbsp;<br />
<br />
La inserci&oacute;n debe ir de la mano, y sostenida, por un plan de capacitaci&oacute;n efectivo y un crecimiento tecnol&oacute;gico a nivel nacional, que le permita a la Argentina impulsar su desarrollo y competir de igual a igual en todos los mercados. En ese contexto, es fundamental analizar los m&eacute;todos y alcances de la capacitaci&oacute;n al nuevo personal.&nbsp;<br />
<br />
En Camima, frente a los saltos tecnol&oacute;gicos de las &uacute;ltimas d&eacute;cadas, motorizamos la capacitaci&oacute;n y la educaci&oacute;n en conjunto con los sindicatos, empezando por la finalizaci&oacute;n de los estudios secundarios para que los trabajadores cuenten con una base s&oacute;lida. Es por eso que sostenemos la necesidad de mirar m&aacute;s all&aacute; de la coyuntura y generar pol&iacute;ticas activas apuntadas al futuro, con la participaci&oacute;n de las c&aacute;maras empresarias, los sindicatos y el Gobierno.&nbsp;<br />
<br />
(*) Presidente de la C&aacute;mara de la Peque&ntilde;a y Mediana Industria Metal&uacute;rgica (Camima).</p>
',
            'breve' => '<p>El Gobierno pondr&aacute; en marcha el Plan Empalme que busca que 400.000 beneficiarios de programas nacionales, que hoy administran los ministerios de Trabajo y Desarrollo Social, puedan incorporarse al sistema de trabajo formal y genuino, para ir dejando atr&aacute;s los subsidios. Al respecto opin&oacute; para T&eacute;lam el presidente de la C&aacute;mara de la Peque&ntilde;a y Mediana Industria Metal&uacute;rgica Argentina (CAMIMA), Jos&eacute; Luis Ammaturo.</p>
',
                'ruta' => 'imgnoticia_5.jpg?16',
                'habilitado' => 1,
                'portada' => 0,
                'orden' => 'ax',
                'pdf' => '',
                'otros' => NULL,
                'image' => NULL,
                'category_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 6,
                'titulo' => 'Ammaturo en Agenda Pyme',
                'descripcion' => '<p>El presidente de CAMIMA, Jos&eacute; Luis Ammaturo, fue entrevistado en el programa radial Agenda Pyme. El ciclo es conducido por Nino Fern&aacute;ndez y Gabriela Ensinck, con la participaci&oacute;n de Guillermo Gammacurta.</p>
',
                'breve' => '<p>El presidente de CAMIMA, Jos&eacute; Luis Ammaturo, fue entrevistado en el programa radial Agenda Pyme. El ciclo es conducido por Nino Fern&aacute;ndez y Gabriela Ensinck, con la participaci&oacute;n de Guillermo Gammacurta.</p>
',
                'ruta' => 'imgnoticia_6.jpg?91',
                'habilitado' => 1,
                'portada' => 0,
                'orden' => 'ao',
                'pdf' => '',
                'otros' => NULL,
                'image' => NULL,
                'category_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 7,
                'titulo' => 'Pymes metalúrgicas respaldan modificaciones a la Ley de Compre Nacional, pero advierten que requerirá de una autoridad de aplicación eficaz',
            'descripcion' => '<p>El presidente de la C&aacute;mara de la Peque&ntilde;a y Mediana Industria Metal&uacute;rgica Argentina (CAMIMA), Jos&eacute; Luis Ammaturo, destac&oacute; la propuesta de modificaci&oacute;n de la Ley de Compre Nacional presentada por el Gobierno y advirti&oacute; que &ldquo;para que este tipo de propuestas sea realmente efectiva, ser&aacute; tarea de los legisladores nacionales dar forma a una&nbsp;autoridad de aplicaci&oacute;n eficaz, que permita cumplir con el objetivo final que es el de apuntalar la producci&oacute;n local y aumentar la mano de obra de las pymes&rdquo;.<br />Ammaturo consider&oacute; que &ldquo;dar un margen de preferencia del 12% a las pymes en las licitaciones y obligar a las extranjeras que se adjudiquen compras estatales a contratar un 20% productos nacionales, es un paso adelante en la recomposici&oacute;n de las pymes y su potenciaci&oacute;n&rdquo;, sin embargo, sostuvo que &ldquo;la medida podr&iacute;a tener un efecto mucho mayor si las preferencia no tuvieran un margen tan exiguo, teniendo en cuenta que las empresas nacionales llevan impl&iacute;cito en sus costos el alto grado impositivo argentino, mientras que el porcentaje de participaci&oacute;n en compras extranjeras podr&iacute;a ubicarse entre un 30% y 40%&rdquo;.<br />&ldquo;Con CAMIMA hemos participado de los debates previos sobre el proyecto que incluyeron a distintas c&aacute;maras empresarias y diputados y coincidimos en que es necesario un organismo de aplicaci&oacute;n efectivo que vele por el cumplimiento del Compre Nacional, de forma tal que se beneficie realmente al entramado pyme, que genera m&aacute;s del 70 por ciento del trabajo argentino. Esa tarea recaer&aacute; en el Congreso, que deber&aacute; contemplar los requerimientos que ya fueron planteados por las pymes&rdquo;, remarc&oacute; el presidente de CAMIMA.<br />En igual sentido, Ammaturo confi&oacute; en que &ldquo;las previsiones del Gobierno para elevar el porcentaje de integraci&oacute;n de productos nacionales al 40% en las compras que realice el Estado, que podr&iacute;an generar 70.000 nuevos puestos de trabajo, se cumplan en el mediano plazo, ya que redundar&aacute; en beneficios para todo el entramado productivo&rdquo;.&nbsp;<br />&ldquo;CAMIMA est&aacute; a la expectativa, dada la posibilidad de que las empresas pymes argentinas accedan a las licitaciones p&uacute;blicas, pensando en la reactivaci&oacute;n de la obra p&uacute;blica y en el fortalecimiento de la industria argentina&rdquo;, afirm&oacute;.<br />&ldquo;Aguardamos que las modificaciones mejoren las condiciones de trabajo de las pymes metal&uacute;rgicas, ampl&iacute;en la oferta laboral y los niveles de producci&oacute;n y mejoren el nivel de competitividad. Sin embargo, al tratarse de un universo heterog&eacute;neo, requerir&aacute; que la norma ofrezca herramientas de f&aacute;cil acceso para incrementar la competitividad de la producci&oacute;n local&rdquo;, complet&oacute; Ammaturo.</p>',
            'breve' => '<p>El presidente de la C&aacute;mara de la Peque&ntilde;a y Mediana Industria Metal&uacute;rgica Argentina (CAMIMA), Jos&eacute; Luis Ammaturo, destac&oacute; la propuesta de modificaci&oacute;n de la Ley de Compre Nacional presentada por el Gobierno y advirti&oacute; que &ldquo;para que este tipo de propuestas sea realmente efectiva, ser&aacute; tarea de los legisladores nacionales dar forma a una&nbsp;autoridad de aplicaci&oacute;n eficaz, que permita cumplir con el objetivo final que es el de apuntalar la producci&oacute;n local y aumentar la mano de obra de las pymes&rdquo;.</p>',
                'ruta' => 'imgnoticia_7.jpg?23',
                'habilitado' => 1,
                'portada' => 1,
                'orden' => 'ap',
                'pdf' => '',
                'otros' => NULL,
                'image' => NULL,
                'category_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 10,
                'titulo' => 'CAMIMA firmó acuerdo anual con la UOM por un incremento del 22%',
            'descripcion' => '<p>El mi&eacute;rcoles 31 se cerr&oacute; el&nbsp;acuerdo anual con la Uni&oacute;n Obrera Metal&uacute;rgica (UOM).&nbsp;La C&aacute;mara de la Peque&ntilde;a y Mediana Industria Metal&uacute;rgica (CAMIMA), junto a otras c&aacute;maras del sector, firm&oacute; anoche una suba salarial&nbsp;que estipula un aumento del 22 por ciento en dos tramos: el primero a pagar en el mes de abril y otro en julio. Se agrega adem&aacute;s&nbsp;una suma fija en concepto de Gratificaci&oacute;n No Remunerativa de 4.000 pesos a pagar en dos cuotas&nbsp;de 2.000 pesos cada una en noviembre&nbsp;pr&oacute;ximo y otra en febrero de 2018.&nbsp;</p>

<p>&quot;El acuerdo se alcanz&oacute; tras intensas negociaciones paritarias, pero con un di&aacute;logo permanente se lleg&oacute; a una cifra que permite mantener el poder adquisitivo de los trabajadores preservando los puestos de trabajo&rdquo;, destac&oacute; el presidente de CAMIMA, Jos&eacute; Luis Ammaturo, y agreg&oacute; que este convenio &ldquo;representa un esfuerzo de las c&aacute;maras porque, si bien la industria est&aacute; repuntando, el nivel de actividad no alcanza a&uacute;n el pleno uso de la &nbsp;capacidad instalada&rdquo;.&nbsp;</p>

<p>El convenio, que fue firmado por las partes&nbsp;en el Ministerio de Trabajo, tiene validez por un a&ntilde;o. &ldquo;El acuerdo se alcanz&oacute; tras intensas negociaciones paritarias, pero con un di&aacute;logo permanente se lleg&oacute; a una cifra que permite mantener el poder adquisitivo de los trabajadores preservando los puestos de trabajo&rdquo;, destac&oacute; el presidente de CAMIMA, Jos&eacute; Luis Ammaturo, y agreg&oacute; que este convenio &ldquo;representa un esfuerzo de las c&aacute;maras porque, si bien la industria est&aacute; repuntando, el nivel de actividad no alcanza a&uacute;n el pleno uso de la &nbsp;capacidad instalada&rdquo;.&nbsp;</p>

<p>En igual sentido, Ammaturo advirti&oacute;: &ldquo;Las pymes, como las mayores generadoras de empleo de todo el pa&iacute;s y comprometidas con las necesidades tanto de los trabajadores como de los empresarios, vemos el aumento de las importaciones &nbsp;con preocupaci&oacute;n&rdquo;. &ldquo;Es otro factor a tener en cuenta para que el sector productivo sortee otro a&ntilde;o con los menores sobresaltos posibles&rdquo;, se&ntilde;al&oacute; el dirigente metal&uacute;rgico.</p>

<p>&ldquo;Los empresarios continuaremos esforz&aacute;ndonos para seguir adelante, manteniendo los niveles de producci&oacute;n y cuidando el empleo&rdquo;, concluy&oacute; el presidente de CAMIMA.</p>

<p>&ldquo;Los empresarios continuaremos esforz&aacute;ndonos para seguir adelante, manteniendo los niveles de producci&oacute;n y cuidando el empleo&rdquo;, concluy&oacute; el presidente de CAMIMA.</p>

<p><a href="http://www.camima.org.ar/archivos/pdf_63.pdf?81">Descargue el acuerdo Salarial UOM 2017</a></p>
',
                'breve' => '<p>La C&aacute;mara de la Peque&ntilde;a y Mediana Industria Metal&uacute;rgica&nbsp;firm&oacute; acuerdo anual con la UOM por un incremento del 22% en dos cuotas y una gratificaci&oacute;n no remunerativa de 4.000 pesos.</p>

<p><a href="http://www.camima.org.ar/archivos/pdf_63.pdf?81">Descargue el acuerdo Salarial UOM 2017</a></p>

<p>&nbsp;</p>
',
                'ruta' => 'ofertas_10.jpg?14',
                'habilitado' => 1,
                'portada' => 0,
                'orden' => '',
                'pdf' => '',
                'otros' => NULL,
                'image' => NULL,
                'category_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 14,
                'titulo' => 'CAMIMA solicitó al Gobierno revisar el sistema de juicios laborales, para frenar la “industria del juicio”',
                'descripcion' => '<p>Ammaturo&nbsp;coincidi&oacute;&nbsp;con el presidente Mauricio Macri respecto de la necesidad de terminar con la &ldquo;industria de los juicios laborales&rdquo;, al se&ntilde;alar que &ldquo;es necesario enfrentar con urgencia la mafia de la litigiosidad judicial vinculada a las contingencias laborales, porque destruye la generaci&oacute;n de empleo al tiempo que erosiona a las pymes en general y a las industriales, en particular&rdquo;.<br />
En este contexto, pidi&oacute; al Presidente &ldquo;un respaldo espec&iacute;fico para frenar este avance, que permita revisar &nbsp;un sistema legislativo y judicial que fue desnaturalizando los objetivos para los que fue instaurado, dando lugar a una &lsquo;industria del juicio&rsquo; que pone en jaque a un gran n&uacute;mero de peque&ntilde;as y medianas empresas, sector productivo que emplea a m&aacute;s del 70 por ciento de los trabajadores del pa&iacute;s&rdquo;.<br />
&ldquo;Las mafias de los juicios laborales est&aacute;n formadas por grupos de abogados y jueces inescrupulosos, que muchas veces est&aacute;n apa&ntilde;adas desde el Estado&rdquo;, cuestion&oacute; el presidente de CAMIMA y remarc&oacute; que &ldquo;son mayormente abogados y peritos los que se quedan con el gran negocio del juicio&rdquo;. &ldquo;En el Fuero Laboral, el Poder Judicial es marcadamente pro trabajador, permitiendo demandas con ausencia de pruebas o avalando sentencias que perjudican abiertamente a las pymes, generando una gran incertidumbre en las relaciones laborales&rdquo;, explic&oacute;.<br />
&ldquo;Reducir la litigiosidad y los altos costos derivados, es extremadamente urgente en un contexto complicado para nuestra industria y en vista al futuro laboral de miles de trabajadores, debemos de recuperar la competitividad de la industria y generar nuevo empleo, deben reducirse los costos laborales sin afectar el salario de los trabajadores&rdquo;.<br />
&ldquo;La industria del juicio decididamente no favorece a los trabajadores; avanza generando una p&eacute;rdida de competitividad por el aumento de costos; sumando informalidad al sector y reduciendo la posibilidad de crear nuevos puestos de trabajo ante el temor de demandas injustificadas, que en muchos casos lleva al colapso o cierre definitivo de las pymes&rdquo;, concluy&oacute; Ammaturo.</p>
',
                'breve' => '<p>El presidente de CAMIMA, Jos&eacute; Luis Ammaturo, solicit&oacute; al Presidente&nbsp;&ldquo;un respaldo espec&iacute;fico para frenar el avance de los juicios, que permita revisar&nbsp; un sistema legislativo y judicial que fue desnaturalizando los objetivos para los que fue instaurado&rdquo;.</p>
',
                'ruta' => 'imgnoticia_14.jpg?37',
                'habilitado' => 1,
                'portada' => 0,
                'orden' => '',
                'pdf' => '',
                'otros' => NULL,
                'image' => NULL,
                'category_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 15,
                'titulo' => 'CAMIMA firmó acuerdo anual con Asimra ',
            'descripcion' => '<p>La C&aacute;mara de la Peque&ntilde;a y Mediana Industria Metal&uacute;rgica (CAMIMA) firm&oacute; el acuerdo salarial 2017 con la Asociaci&oacute;n de Supervisores de la Industria Metalmec&aacute;nica (ASIMRA), que estipula un aumento del 22 por ciento en dos cuotas acumulativas. La primera de aquellas cuotas acumulativas ser&aacute; de un 11 por ciento retroactiva a mayo &uacute;ltimo, y el otro 11 se abonar&aacute; en agosto pr&oacute;ximo.</p>

<p>Adem&aacute;s, se agrega na suma fija en concepto de Gratificaci&oacute;n No Remunerativa de 4.000 pesos en dos tramos de 2.000 cada uno, que se efectivizar&aacute; en enero y marzo de 2018.</p>

<p>&ldquo;A trav&eacute;s del di&aacute;logo permanente entre el sector empresario metal&uacute;rgico y los trabajadores llegamos a este acuerdo&rdquo;, explic&oacute; el presidente de&nbsp;CAMIMA, Jos&eacute; Luis Ammaturo, y destac&oacute; que &ldquo;este convenio permite mantener el poder adquisitivo de los trabajadores, sin afectar el nivel de actividad y preservando los puestos de trabajo&rdquo;.</p>

<p>Para acceder a al acuerdo, haga click <a href="http://camima.org.ar/asimraindividual.php?id=7">aqu&iacute;</a>.&nbsp;</p>
',
                'breve' => '<p>Referentes de CAMIMA y del sector empresario metal&uacute;rgico se reunieron con los representantes de Asimra para alcanzar el acuerdo salarial 2017. &nbsp;</p>

<p>&nbsp;</p>
',
                'ruta' => 'imgnoticia_15.jpg?59',
                'habilitado' => 1,
                'portada' => 0,
                'orden' => '',
                'pdf' => '',
                'otros' => NULL,
                'image' => NULL,
                'category_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 17,
                'titulo' => 'Camima analizó el panorama económico del sector metalúrgico junto a periodistas',
            'descripcion' => '<p>El presidente de la C&aacute;mara de la Peque&ntilde;a y Mediana Industria Metal&uacute;rgica Argentina (CAMIMA), Jos&eacute; Luis Ammaturo, resalt&oacute;&nbsp;que &ldquo;la industria en general, y la metal&uacute;rgica en particular, atraviesan un momento impreciso&rdquo; y remarc&oacute; que &ldquo;por eso es fundamental que el Estado contin&uacute;e apoyando al sector&rdquo;.<br />
&ldquo;Es necesario que las pymes nos reconvirtamos para volvernos competitivas, aportar al crecimiento del sector que apuntale el empleo, adem&aacute;s de multiplicar las audiencias con el Gobierno y avanzar en las propuestas que ya se hicieron&rdquo;, remarc&oacute; el dirigente empresario.<br />
Ammaturo se refiri&oacute; de este modo durante un almuerzo que CAMIMA organiz&oacute; para agasajar a los periodistas en el marco de los festejos por el D&iacute;a del Trabajador de Prensa.<br />
&ldquo;La industria en general, y la metal&uacute;rgica en particular, ocupan un papel fundamental para el crecimiento del pa&iacute;s y por ello es necesario que el Estado contin&uacute;e apoyando al sector, que requiere una reforma impositiva que permita alivianar la estructura de los costos de las pymes y volverlas competitivas, lo que redundar&aacute; en m&aacute;s empleo y en el sostenimiento de los puestos de trabajo&rdquo;, remarc&oacute;.<br />
Durante el almuerzo, el titular de CAMIMA tambi&eacute;n analiz&oacute; el acuerdo salarial 2017 con la Uni&oacute;n Obrera Metal&uacute;rgica (UOM), que estipula un aumento del 22 por ciento en dos tramos. &ldquo;Fue un logro del sector metal&uacute;rgico que devino del esfuerzo que hicieron los asociados de la c&aacute;mara, con beneficios para los trabajadores sin afectar el normal funcionamiento de las empresas&rdquo;, subray&oacute; Ammaturo.<br />
Del mismo modo, el titular de CAMIMA repas&oacute; aspectos como obra p&uacute;blica e inversiones. &ldquo;Dada la posibilidad de que las empresas pymes argentinas accedan a las licitaciones p&uacute;blicas, pensando en la reactivaci&oacute;n de la obra p&uacute;blica y en el fortalecimiento de la industria argentina, CAMIMA est&aacute; a la expectativa, aunque desde la c&aacute;mara observamos que la obra p&uacute;blica se est&aacute; volcando muy poco hacia la industria metal&uacute;rgica, el rubro industrial m&aacute;s importante del pa&iacute;s en cuanto a generaci&oacute;n de empleo, con m&aacute;s 254.000 trabajadores registrados&rdquo;, se&ntilde;al&oacute; el dirigente pyme.<br />
Durante el almuerzo, acompa&ntilde;aron a Ammaturo, el vicepresidente de CAMIMA, Pablo Reale; el secretario de la entidad, Aldo Lo Russo, y el gerente, Fernando Ruiz y Blanco.</p>
',
                'breve' => '<p>El presidente de la C&aacute;mara de la Peque&ntilde;a y Mediana Industria Metal&uacute;rgica Argentina , Jos&eacute; Luis Ammaturo, resalt&oacute; &nbsp;que &ldquo;la industria en general, y la metal&uacute;rgica en particular, atraviesan un momento impreciso&rdquo; y remarc&oacute; que &ldquo;por eso es fundamental que el Estado contin&uacute;e apoyando al sector&rdquo;. Fue en el marco de&nbsp;un almuerzo que CAMIMA organiz&oacute; para agasajar a los periodistas en el marco de los festejos por el D&iacute;a del Trabajador de Prensa.</p>
',
                'ruta' => 'ofertas_17.jpg?78',
                'habilitado' => 1,
                'portada' => 0,
                'orden' => 'aaaa',
                'pdf' => '',
                'otros' => NULL,
                'image' => NULL,
                'category_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 18,
                'titulo' => 'Preocupación por demoras en el trámite del RIN y de los bonos de bienes de capital',
            'descripcion' => '<p>-Existen demoras de 6 meses o m&aacute;s en la evaluaci&oacute;n y emisi&oacute;n del RIN (Registro Industrial de la Naci&oacute;n), a&uacute;n con la documentaci&oacute;n necesaria presentada. Esa demora en el tr&aacute;mite puede producir a su vez la caducidad de la validez de alguna documentaci&oacute;n que forma parte del expediente (la habilitaci&oacute;n municipal debe tener como m&aacute;ximo seis meses desde su emisi&oacute;n, por ejemplo), con lo que se genera un nuevo ciclo no imputable a la responsabilidad de la empresa solicitante, el cual se retroalimenta y no tiene fin. Recordemos que disponer del RIN es indispensable para obtener el beneficio.</p>

<p>&nbsp;</p>

<p>-Tambi&eacute;n se produce una demora sustancial en el avance de los expedientes de renovaci&oacute;n de los bonos de bienes de capital (Decreto 379/01), adem&aacute;s de requerimientos que solo complican y traban el otorgamiento del beneficio. Estas demoras generan imprevisibilidad, imposibilidad de obtener el beneficio por trabas administrativas y de llegar a obtenerlo una p&eacute;rdida concreta de valor relativo producto de la inflaci&oacute;n y los gastos financieros, que al cabo desnaturaliza el objeto de su otorgamiento.</p>

<p>&nbsp;</p>

<p>Es lamentable que tan importante incentivo a la producci&oacute;n de bienes industriales nacionales, se termina esfumando, producto de la burocracia estatal, situaci&oacute;n que a nuestras Industrias pyme afecta en su competitividad, aparejando menor actividad y menor posibilidades de generaci&oacute;n de empleo genuino, por lo que solicitamos a las autoridades de aplicaci&oacute;n que tengan en cuenta esta situaci&oacute;n en car&aacute;cter de urgente, y se busquen las formas para darle pronta soluci&oacute;n. Nuestra c&aacute;mara se pone como siempre a disposici&oacute;n de las autoridades para colaborar y aportar en esa tarea.</p>
',
            'breve' => '<p>Haci&eacute;ndose eco de las inquietudes que a diario nos transmiten nuestras empresas asociadas, la c&aacute;mara considera necesario expresar su preocupaci&oacute;n por las demoras que est&aacute;n sufriendo los tr&aacute;mites vinculados con la emisi&oacute;n del RIN y el otorgamiento de los bonos a los fabricantes de bienes de capital (Decreto 379/01 y sus sucesivas pr&oacute;rrogas ).</p>

<p>&nbsp;</p>
',
                'ruta' => 'imgnoticia_18.jpg?86',
                'habilitado' => 1,
                'portada' => 0,
                'orden' => '1',
                'pdf' => '',
                'otros' => NULL,
                'image' => NULL,
                'category_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 25,
                'titulo' => 'Contra la violencia laboral',
                'descripcion' => '<p>La vicepresidenta segunda de la C&aacute;mara de la Peque&ntilde;a y Mediana Industria Metal&uacute;rgica Argentina, Roxana Petrecca, particip&oacute; del encuentro que se realiz&oacute; el pasado 4 de julio en la Oficina de Asesoramiento sobre Violencia Laboral del Ministerio de Trabajo, Empleo y Seguridad Social.</p>

<p>La violencia laboral es el abuso de poder con la finalidad de excluir o someter a otro y se manifiesta con acoso psicol&oacute;gico, agresi&oacute;n f&iacute;sica y acoso sexual.</p>
',
                'breve' => '<p>CAMIMA particip&oacute; de una reuni&oacute;n realizada en la Oficina de Asesoramiento sobre Violencia Laboral del Ministerio de Trabajo, Empleo y Seguridad Social.</p>
',
                'ruta' => 'imgnoticia_25.png?59',
                'habilitado' => 1,
                'portada' => 0,
                'orden' => '',
                'pdf' => '',
                'otros' => NULL,
                'image' => NULL,
                'category_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => 29,
                'titulo' => 'Se prorrogó beneficio para industria de bienes de capital que no despidan',
                'descripcion' => '<p>A trav&eacute;s del Decreto 593/2017 publicado este lunes en el Bolet&iacute;n Oficial, se prorrog&oacute; hasta el 31 de diciembre pr&oacute;ximo el R&eacute;gimen de Incentivo para los fabricantes de bienes de capital, que consiste en un bono fiscal transferible y equivalente al 14% de las ventas realizadas, que puede ser usado para cancelar impuestos.</p>

<p>Puede acceder al&nbsp;Decreto 593/2017 haciendo click <a href="https://www.boletinoficial.gob.ar/#!DetalleNorma/168227/20170731">aqu&iacute;</a>.</p>
',
                'breve' => '<p>A trav&eacute;s del Decreto 593/2017 publicado este lunes en el Bolet&iacute;n Oficial, se prorrog&oacute; hasta el 31 de diciembre pr&oacute;ximo el R&eacute;gimen de Incentivo para los fabricantes de bienes de capital, que consiste en un bono fiscal transferible y equivalente al 14% de las ventas realizadas, que puede ser usado para cancelar impuestos.</p>
',
                'ruta' => 'imgnoticia_29.jpg?58',
                'habilitado' => 1,
                'portada' => 0,
                'orden' => 'ab',
                'pdf' => 'document.pdf?13',
                'otros' => NULL,
                'image' => NULL,
                'category_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id' => 30,
                'titulo' => 'El Gobierno prorrogó beneficio para industrias de bienes de capital que no despidan',
                'descripcion' => '<p>El Gobierno nacional prorrog&oacute; hasta el 31 de diciembre pr&oacute;ximo el&nbsp;<strong>R&eacute;gimen de Incentivo para los fabricantes de bienes de capital</strong>, que consiste en un bono fiscal transferible y equivalente al 14% de las ventas realizadas, que puede ser usado para cancelar impuestos, pero condicion&oacute; su otorgamiento a que las firmas beneficiarias no despidan personal.</p>

<p>Lo hizo a trav&eacute;s del decreto 593/2017 publicado hoy en el Bolet&iacute;n Oficial, y que lleva las firmas del presidente Mauricio Macri; del jefe de Gabinete, Marcos Pe&ntilde;a, y de los ministros de Producci&oacute;n, Francisco Cabrera, y de Hacienda, Nicol&aacute;s Dujovne.</p>

<p>&ldquo;El beneficio establecido en este r&eacute;gimen repercute en un menor costo de capital para inversiones en otros sectores&quot;, destac&oacute; a T&eacute;lam el secretario de Industria, Mart&iacute;n Etchegoyen.</p>

<p>Subray&oacute; que con la extensi&oacute;n del r&eacute;gimen, el Gobierno busca que &quot;este incentivo sirva para mejorar las capacidades productivas del sector, con mayor incorporaci&oacute;n de tecnolog&iacute;a y capacidad exportadora&quot;.</p>

<p>Al solicitar este beneficio, las empresas deber&aacute;n presentar una declaraci&oacute;n jurada &quot;asumiendo el compromiso por escrito, a no reducir la plantilla de personal teniendo como base de referencia el mayor n&uacute;mero de empleados registrados durante el mes de diciembre de 2011, ni aplicar suspensiones sin goce de haberes&quot;.</p>

<p>El beneficio consiste en&nbsp;<strong>un bono de cr&eacute;dito fiscal transferible, equivalente al 14% de las ventas efectuadas</strong>, siempre que los bienes formen parte de l&iacute;neas de producci&oacute;n completas y aut&oacute;nomas.</p>

<p>Sin embargo, el decreto modific&oacute; la base de c&aacute;lculo del beneficio para premiar a las empresas que producen con mayor valor agregado e integraci&oacute;n local.<br />
&nbsp;<br />
Adem&aacute;s, estableci&oacute; que los bienes alcanzados deben ser fabricados en el pa&iacute;s, afectados a nuevas plantas industriales o ampliaci&oacute;n o modernizaci&oacute;n de establecimientos ya existentes destinados a la producci&oacute;n de bienes tangibles.</p>

<p>En cambio, subray&oacute; que &ldquo;estar&aacute;n excluidos del beneficio fiscal el transporte de los bienes y las obras civiles e instalaciones auxiliares correspondientes a obras complementarias de las l&iacute;neas de producci&oacute;n completas&rdquo;.</p>

<p>De acuerdo con el Estimador Mensual Industrial (EMI) de mayo &uacute;ltimo, publicado por el Instituto Nacional de Estad&iacute;sticas y Censo (Indec), &ldquo;el dinamismo que muestra el segmento agr&iacute;cola termina de consolidar el desempe&ntilde;o favorable del sector productor de bienes de capital, tanto en los segmentos vinculados con maquinaria agr&iacute;cola e implementos para el campo, como en la fabricaci&oacute;n de tractores&rdquo;.</p>

<p>Fuente: Diario El Cronista</p>
',
                'breve' => '<p>El Gobierno nacional prorrog&oacute; hasta el 31 de diciembre pr&oacute;ximo el&nbsp;<strong>R&eacute;gimen de Incentivo para los fabricantes de bienes de capital</strong>, que consiste en un bono fiscal transferible y equivalente al 14% de las ventas realizadas, que puede ser usado para cancelar impuestos, pero condicion&oacute; su otorgamiento a que las firmas beneficiarias no despidan personal.</p>

<p>Lo hizo a trav&eacute;s del decreto 593/2017 publicado hoy en el Bolet&iacute;n Oficial, y que lleva las firmas del presidente Mauricio Macri; del jefe de Gabinete, Marcos Pe&ntilde;a, y de los ministros de Producci&oacute;n, Francisco Cabrera, y de Hacienda, Nicol&aacute;s Dujovne.</p>
',
                'ruta' => 'imgnoticia_30.jpg?72',
                'habilitado' => 1,
                'portada' => 0,
                'orden' => '',
                'pdf' => '355173441-Bienes-de-Capital.pdf?23',
                'otros' => NULL,
                'image' => NULL,
                'category_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'id' => 33,
                'titulo' => 'CAMIMA participó del lanzamiento del  Programa de Crédito para la Formación Profesional 2017',
                'descripcion' => '<p>El gerente general de CAMIMA, Fernando Ruiz y Blanco, particip&oacute; ayer -en representaci&oacute;n de la c&aacute;mara- del lanzamiento del Programa de Cr&eacute;dito para la Formaci&oacute;n Profesional 2017, que se realiz&oacute; en el Ministerio de Trabajo.<br />
La presentaci&oacute;n estuvo a cargo del secretario de Empleo, Miguel Angel Ponte; el subsecretario de Pol&iacute;ticas de Ermpleo y Formaci&oacute;n Profesional, Conrado Reinke, y la coordinadora del Programa, Irina Asrilevich.<br />
El programa se trata de Incentivos para micro, pymes, grandes empresas, c&aacute;maras empresarias y cooperativas de trabajo que generen propuestas de formaci&oacute;n para los trabajadores.<br />
Tiene como objetivo principal fortalecer las competencias laborales de los trabajadores ocupados y de aquellos desocupados que podr&iacute;an incorporarse en empresas y cooperativas de trabajo.<br />
Promueve tambi&eacute;n, el fortalecimiento de instituciones de formaci&oacute;n dedicadas a formar a dichos trabajadores, la certificaci&oacute;n de calidad de procesos y productos y la mejora de las condiciones de higiene y seguridad de los ambientes de trabajo.<br />
M&aacute;s informaci&oacute;n en&nbsp;<a href="https://www.argentina.gob.ar/trabajo/cfp" onclick="LinkshimAsyncLink.referrer_log(this, " target="_blank">https://www.argentina.gob.ar/trabajo/cfp</a></p>
',
                    'breve' => '<p>El gerente general de CAMIMA, Fernando Ruiz y Blanco, particip&oacute; ayer -en representaci&oacute;n de la c&aacute;mara- del lanzamiento del Programa de Cr&eacute;dito para la Formaci&oacute;n Profesional 2017, que se realiz&oacute; en el Ministerio de Trabajo.<br />
La presentaci&oacute;n estuvo a cargo del secretario de Empleo, Miguel Angel Ponte; el subsecretario de Pol&iacute;ticas de Ermpleo y Formaci&oacute;n Profesional, Conrado Reinke, y la coordinadora del Programa, Irina Asrilevich.</p>
',
                    'ruta' => 'ofertas_33.jpg?44',
                    'habilitado' => 1,
                    'portada' => 0,
                    'orden' => '',
                    'pdf' => '',
                    'otros' => NULL,
                    'image' => NULL,
                    'category_id' => 3,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                12 => 
                array (
                    'id' => 34,
                    'titulo' => 'CAMIMA en los festejos por el Día del Empresario Nacional',
                    'descripcion' => '',
                'breve' => '<p>Jos&eacute; Luis Ammaturo (presidentes) y Aldo Lo Russo (secretario), encabezaron la comitiva de CAMIMA que particip&oacute; de la conmemoraci&oacute;n por el D&iacute;a del Empresario Nacional, organizada por la CGERA en el Hotel Castelar.<br />
&quot;Los empresarios pymes trabajamos y nos esforzamos todos los d&iacute;as para construir un pa&iacute;s mejor&quot;, destac&oacute; Ammaturo durante los saludos.</p>
',
                    'ruta' => 'imgnoticia_34.jpg?27',
                    'habilitado' => 1,
                    'portada' => 0,
                    'orden' => '',
                    'pdf' => '',
                    'otros' => NULL,
                    'image' => NULL,
                    'category_id' => 3,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                13 => 
                array (
                    'id' => 35,
                    'titulo' => 'CAMIMA participó del festejo por el Día de la Industria',
                'descripcion' => '<p>El presidente de la C&aacute;mara de la Peque&ntilde;a y Mediana Industria Metal&uacute;rgica Argentina (CAMIMA), Jos&eacute; Luis Ammaturo, particip&oacute; del festejo por el D&iacute;a de la Industria organizado por la UIA y encabezado por el presidente Mauricio Macri. En este contexto, destac&oacute; la decisi&oacute;n del Gobierno de encarar &ldquo;reformas profundas, fundamentales para generar previsibilidad para la industria&rdquo; y confi&oacute; en que se ir&aacute;n tomando las &ldquo;medidas necesarias para continuar por la senda del crecimiento que comenz&oacute; a percibirse en los &uacute;ltimos meses&rdquo;.</p>

<p>&ldquo;Confiamos en que la incipiente mejora de la actividad econ&oacute;mica se ir&aacute; consolidando a partir de las reformas profundas que el Gobierno ha comenzado a hacer y que se ha comprometido a continuar en el mediano plazo&rdquo;, afirm&oacute; Ammaturo&nbsp;en el Parque Industrial de Pilar.</p>

<p>Al respecto, el presidente de CAMIMA indic&oacute; que &ldquo;estas reformas de base son fundamentales para la industria, porque dan previsibilidad para poder trabajar, algo que ven&iacute;amos reclamando desde a&ntilde;os en el sector metal&uacute;rgico y en toda la industria&rdquo;. No obstante, alert&oacute; que &ldquo;cuando se atacan los temas de fondo, los resultados tardan en verse&rdquo;.</p>

<p>&ldquo;Se trata de un cambio de fondo, que apunta a una econom&iacute;a con previsibilidad y con una mirada de largo plazo. La industria necesita de pol&iacute;ticas de largo plazo, que transciendan a un gobierno&rdquo;, subray&oacute; el presidente de CAMIMA.</p>

<p>Si bien Ammaturo reconoci&oacute; que &ldquo;faltan un largo camino por recorrer para ir solucionando los problemas de alta litigiosidad laboral, de inseguridad jur&iacute;dica y de carga impositiva, entre otros&rdquo;, destac&oacute; que se han ido tomando decisiones para desburocratizar toda la mara&ntilde;a de tr&aacute;mites que las pymes ten&iacute;an para crecer y eso es alentador, porque se est&aacute; poniendo el foco en los temas que ven&iacute;amos reclamando&rdquo;. &ldquo;Hay mucho para hacer, pero estamos por el buen camino&rdquo;, confi&oacute;.</p>

<p>&ldquo;Si los cambios se hacen como se dice, eso traer&aacute; previsibilidad y la confianza de acercarnos a ser un pa&iacute;s serio&rdquo;, complet&oacute; el empresario metal&uacute;rgico.</p>

<p>Acompa&ntilde;aron a Ammaturo al festejo del D&iacute;a de la Industria, los vicepresidentes de CAMIMA, Pablo Reale y Roxana Petrecca, y Nilda Brovida, socia de la entidad.</p>
',
                'breve' => '<p>El presidente de la C&aacute;mara de la Peque&ntilde;a y Mediana Industria Metal&uacute;rgica Argentina (CAMIMA), Jos&eacute; Luis Ammaturo, particip&oacute; del festejo por el D&iacute;a de la Industria organizado por la UIA y encabezado por el presidente Mauricio Macri.</p>

<p>En este contexto, destac&oacute; la decisi&oacute;n del Gobierno de encarar &ldquo;reformas profundas, fundamentales para generar previsibilidad para la industria&rdquo; y confi&oacute; en que se ir&aacute;n tomando las &ldquo;medidas necesarias para continuar por la senda del crecimiento que comenz&oacute; a percibirse en los &uacute;ltimos meses&rdquo;.</p>
',
                    'ruta' => 'imgnoticia_35.jpg?63',
                    'habilitado' => 1,
                    'portada' => 0,
                    'orden' => 'último',
                    'pdf' => '',
                    'otros' => NULL,
                    'image' => NULL,
                    'category_id' => 3,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                14 => 
                array (
                    'id' => 36,
                    'titulo' => 'CAMIMA se reunió con representantes del Ministerio de Trabajo',
                    'descripcion' => '<p>Se avanza en la posibilidad de aplicar un programa de terminal secundaria para empleados y trabajadores del sector industrial. Ya se realizaron dos encuentros en CAMIMA con representantes del Ministerio de Trabajo. De ellos participaron la Lic. Irina Asrilevich, coordinadora del Programa de Cr&eacute;dito Fiscal para la Formaci&oacute;n Profesional del MTEySS de la Naci&oacute;n, y Lucas Srur, y en representaci&oacute;n de CAMIMA lo hicieron Fernando Ruiz y Blanco, gerente, y el Lic. Fernando Blumenkranc, asesor en Capacitaci&oacute;n. En las reuniones, se eval&uacute;a la posibilidad de que la Unidad de Capacitaci&oacute;n de CAMIMA lleve adelante un programa para que puedan terminar el secundario empleados de pymes socias y eventualmente no socias de la entidad, que no hayan podido hacerlo a&uacute;n, obteniendo un t&iacute;tulo oficial. La incorporaci&oacute;n de nuevas tecnolog&iacute;as exige a su vez nuevas competencias alcanzables solamente con un nivel de Educaci&oacute;n Medio, como m&iacute;nimo. Por otro lado, lograr la terminalidad secundaria mejora las condiciones de empleabilidad de los adultos. Se prev&eacute;n nuevos encuentros para los pr&oacute;ximos d&iacute;as.</p>
',
                    'breve' => '<p>Se avanza en la posibilidad de aplicar un programa de terminal secundaria para empleados y trabajadores del sector industrial.</p>
',
                    'ruta' => 'imgnoticia_36.jpg?85',
                    'habilitado' => 1,
                    'portada' => 0,
                    'orden' => '',
                    'pdf' => '',
                    'otros' => NULL,
                    'image' => NULL,
                    'category_id' => 3,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                15 => 
                array (
                    'id' => 39,
                    'titulo' => 'José Luis Ammaturo fue reelecto presidente de CAMIMA',
                'descripcion' => '<p>El empresario pyme metal&uacute;rgico Jos&eacute; Luis Ammaturo fue reelecto presidente de la C&aacute;mara de la Peque&ntilde;a y Mediana Industria Metal&uacute;rgica Argentina (CAMIMA), en una asamblea en la que, adem&aacute;s, fueron aprobados el balance y las memorias 2017. &ldquo;Vamos a seguir acompa&ntilde;ando el proceso necesario de fortalecimiento de la industria argentina, apuntalado hoy a trav&eacute;s del an&aacute;lisis sobre las reformas laborales e impositivas que comienzan a debatirse en el pa&iacute;s&rdquo;, se&ntilde;al&oacute; Ammaturo al comenzar un nuevo per&iacute;odo al frente de la entidad pyme metal&uacute;rgica.</p>

<p>En cuanto a los temas pendientes, el dirigente empresario se&ntilde;al&oacute; que &ldquo;se debe avanzar en un proceso de mejora de la competitividad y de las condiciones de estabilidad y seguridad jur&iacute;dica, para atraer inversiones y potenciar el proceso productivo del pa&iacute;s&rdquo;.</p>

<p>&ldquo;La Argentina necesita encarar un camino definitivo hacia el crecimiento, con pol&iacute;ticas de largo plazo, que trasciendan a los gobiernos de turno&rdquo;, afirm&oacute; Ammaturo y agreg&oacute; que para ello &ldquo;es fundamental que los legisladores, el Gobierno, el sector empresario y los trabajadores den un debate serio sobre qu&eacute; pa&iacute;s queremos y hacia d&oacute;nde queremos ir&rdquo;.</p>

<p>Al respecto, el titular de CAMIMA se&ntilde;al&oacute; que &ldquo;es un paso fundamental que las reformas laboral e impositiva que present&oacute; el Gobierno y que ahora debe debatir el Congreso, cuenten con un amplio an&aacute;lisis sobre la situaci&oacute;n actual y proyecciones de futuro&rdquo;.</p>

<p>&ldquo;La industria del juicio es uno de los grandes problemas que afronta hoy la industria y comenzar a pensar en una reforma que termine con los especuladores, es un gran paso que debemos dar si queremos ganar en competitividad y generar trabajo genuino&rdquo;, mencion&oacute; como ejemplo Ammaturo, que encara un nuevo per&iacute;odo al frente de CAMIMA.</p>
',
                'breve' => '<p>El empresario pyme metal&uacute;rgico Jos&eacute; Luis Ammaturo fue reelecto presidente de la C&aacute;mara de la Peque&ntilde;a y Mediana Industria Metal&uacute;rgica Argentina (CAMIMA), en una asamblea en la que, adem&aacute;s, fueron aprobados el balance y las memorias 2017. &ldquo;Vamos a seguir acompa&ntilde;ando el proceso necesario de fortalecimiento de la industria argentina, apuntalado hoy a trav&eacute;s del an&aacute;lisis sobre las reformas laborales e impositivas que comienzan a debatirse en el pa&iacute;s&rdquo;, se&ntilde;al&oacute; Ammaturo al comenzar un nuevo per&iacute;odo al frente de la entidad pyme metal&uacute;rgica.</p>
',
                    'ruta' => 'imgnoticia_39.png?62',
                    'habilitado' => 1,
                    'portada' => 0,
                    'orden' => '',
                    'pdf' => '',
                    'otros' => NULL,
                    'image' => NULL,
                    'category_id' => 3,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                16 => 
                array (
                    'id' => 40,
                'titulo' => 'Una empresa socia de CAMIMA accedió a créditos no reembolsables (ANR) por 3 millones de pesos',
                    'descripcion' => '<p>Cuando los socios de Talleres Imeco SA, encabezados por Carlos Pozzolo, decidieron que ten&iacute;an que ganar competitividad si quer&iacute;an mantenerse firmes en el mercado, comenzaron a evaluar la posibilidad de solicitar un nuevo cr&eacute;dito a tasa subsidiada. Ya hab&iacute;an accedido a uno algunos a&ntilde;os atr&aacute;s, que les hab&iacute;a permitido sumar y mejorar las m&aacute;quinas con las que contaban, pero las condiciones actuales requer&iacute;an de equipamiento con mejor tecnolog&iacute;a.</p>

<p>Fue as&iacute; que los hijos de Carlos prepararon la carpeta de solicitud del cr&eacute;dito y la presentaron ante el Ministerio de Producci&oacute;n, pidiendo financiamiento para compra de nueva maquinaria. Tras ser evaluada la carpeta y teniendo en cuenta las caracter&iacute;sticas de la empresa, su solvencia econ&oacute;mica y financiera, los rubros en lo que trabaja y su muy buen perfil, el Ministerio defini&oacute; que cumpl&iacute;a con los requisitos necesarios para acceder a Aportes No Reembolsables (ANR) por un total de 3 millones de pesos.</p>

<p>&ldquo;Nos presentamos para pedir un pr&eacute;stamo a tasa subsidiada y nos terminaron ofreciendo ANR, lo &uacute;nico que puedo estar es agradecido&rdquo;, se&ntilde;ala Carlos.</p>

<p>Imeco &ndash;firma socia de la C&aacute;mara Argentina de la Peque&ntilde;a y Mediana Industria Metal&uacute;rgica Argentina (CAMIMA)- es una empresa familiar creada en 1948 por el padre de Carlos junto a dos socios, en Villa Ort&uacute;zar, Ciudad de Buenos Aires. &ldquo;Ahora somos tres accionistas y pr&oacute;ximamente seremos cuatro; todos dentro del grupo familiar: tres de mis hijos trabajan ah&iacute;, uno hace 22 a&ntilde;os, otro hace tres y una hija que hace 11 a&ntilde;os que est&aacute; con nosotros&rdquo;, cuenta Carlos. Sus otras dos hijas se dedican a otra actividad y no forman parte de manera directa del legado familiar.</p>

<p>Fabrican componentes mec&aacute;nicos y piezas a pedido de terceros y son proveedores de las industrias del petr&oacute;leo, aeroespacial, energ&iacute;a nuclear y aerosoles y tambi&eacute;n fabrican piezas seg&uacute;n planos de los clientes.</p>

<p>Hace unos a&ntilde;os, Imeco hab&iacute;a accedido a un cr&eacute;dito a tasa subsidiada que, seg&uacute;n considera, Carlos &ldquo;tambi&eacute;n fue un muy buen cr&eacute;dito&rdquo;. &ldquo;Pero que nos den ANR nos sorprendi&oacute;&rdquo;, agrega el empresario pyme. Seg&uacute;n dijo, &ldquo;el proceso fue simple, se pudieron cumplimentar cosas por mail, por tel&eacute;fono, con muy buena predisposici&oacute;n por parte del Ministerio&rdquo;.</p>

<p>Los 3 millones de pesos de ANR ser&aacute;n destinados a la compra de tres m&aacute;quinas: un centro de mecanizado CNC, otra m&aacute;quina de medir CNC y una m&aacute;quina para grabar piezas por l&aacute;ser. &ldquo;Esto nos va a permitir aumentar la producci&oacute;n y duplicar los controles de las piezas que se fabrican, para mejorar la calidad y ganar mayor competitividad&rdquo;, sostiene el presidente de Imeco.</p>

<p>Si bien la empresa ya cuenta con cuatro centros de mecanizado, el nuevo que tienen previsto adquirir cuenta con mayores dimensiones a los actuales, lo que les permitir&aacute; hacer piezas m&aacute;s grandes.</p>

<p>&ldquo;Nuestro objetivo es incrementar la cantidad de horas, en funci&oacute;n de bajar costos y ser m&aacute;s competitivos&rdquo;, explica Carlos y agrega que &ldquo;hace un a&ntilde;o que se reactiv&oacute; el trabajo&rdquo;. &ldquo;Necesitamos estar a la altura de las circunstancias&rdquo;, asegura.</p>

<p>&ldquo;Tuvimos diez meses de 2016 malos en ventas, pero en octubre de ese a&ntilde;o se empez&oacute; a reactivar y desde entonces la actividad no declin&oacute;. Este a&ntilde;o vamos a tener un muy buen 2017 y 2018 esperamos que tambi&eacute;n. Los tres primeros meses la demanda ya est&aacute; tomada y creo que va a andar muy bien&rdquo;, confi&oacute; el presidente de Imeco, que prev&eacute; aumentar la plantilla de personal de la planta, a partir de mejorar su producci&oacute;n.</p>
',
                    'breve' => '<p>Cuando los socios de Talleres Imeco SA, encabezados por Carlos Pozzolo, decidieron que ten&iacute;an que ganar competitividad si quer&iacute;an mantenerse firmes en el mercado, comenzaron a evaluar la posibilidad de solicitar un nuevo cr&eacute;dito a tasa subsidiada. Ya hab&iacute;an accedido a uno algunos a&ntilde;os atr&aacute;s, que les hab&iacute;a permitido sumar y mejorar las m&aacute;quinas con las que contaban, pero las condiciones actuales requer&iacute;an de equipamiento con mejor tecnolog&iacute;a.</p>
',
                    'ruta' => 'ofertas_40.jpg?20',
                    'habilitado' => 1,
                    'portada' => 0,
                    'orden' => '',
                    'pdf' => '',
                    'otros' => NULL,
                    'image' => NULL,
                    'category_id' => 3,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                17 => 
                array (
                    'id' => 41,
                    'titulo' => 'CAMIMA participó en el festejó de CARMAHE cerrando el 2017 ',
                    'descripcion' => '<p>Con m&aacute;s de 200 invitados entre socios de la C&aacute;mara e invitados especiales, CARMAHE cerr&oacute; el 2017 y festej&oacute; los logros obtenidos, as&iacute; como las buenas perspectivas hacia el pr&oacute;ximo a&ntilde;o.</p>

<p>Participaron del evento Dami&aacute;n Testori, subsecretario de Pol&iacute;tica y Gesti&oacute;n de la PyME, acompa&ntilde;ado de su jefe de Gabinete, Gast&oacute;n Ostrowiecki. Tambi&eacute;n lo hicieron los presidentes de CIRA, Rub&eacute;n Oscar Garc&iacute;a; de UIPBA, Mario Gualtieri; de AFFMHA, Daniel Delle Grazie; de CAFHIM, Critina Barol&iacute;n; de CAFARA, Juan Carlos Mari&ntilde;o; de ASORA, Osvaldo Kovalchuk, y <strong>de CAMIMA Jos&eacute; Luis Ammaturo</strong>, as&iacute; como Pedro Cascales, directivo de CARMAHE y secretario de Prensa y Director de la rama Industria de CAME.</p>

<p>El encuentro de camarader&iacute;a dio inicio con las palabras de bienvenida del presidente de CARMAHE, Jorge G&ouml;ttert, quien sostuvo: &ldquo;Hemos transitado un a&ntilde;o donde obtuvimos resultados concretos sobre lo que hace un a&ntilde;o eran solo expectativas. La reactivaci&oacute;n de las empresas que componen nuestro sector se fue dando paulatinamente. En los primeros meses del a&ntilde;o el crecimiento era dispar, luego en el segundo semestre fue homogeneiz&aacute;ndose, y todos los sectores comenzaron a ver crecimiento en sus actividades&rdquo;. Ese clima de expectativas positivas y buenos augurios se dej&oacute; ver a lo largo de toda la fiesta.</p>

<p>Cerr&oacute; su discurso contando los avances de la organizaci&oacute;n de la edici&oacute;n 2018 de FIMAQH, que se llevar&aacute; a cabo del 15 al 19 de mayo en Tecn&oacute;polis. &ldquo;Hoy con reglas de juego claras, nuestra industria conf&iacute;a en que los diversos sectores demandar&aacute;n maquinarias, bienes de capital y tecnolog&iacute;a, porque el crecimiento requiere actualizaci&oacute;n tecnol&oacute;gica y conocimiento aplicado, y todo eso brinda FIMAQH&rdquo;, concluy&oacute; G&ouml;ttert.</p>
',
                    'breve' => '<p>Con m&aacute;s de 200 invitados entre socios de la C&aacute;mara e invitados especiales, CARMAHE cerr&oacute; el 2017 y festej&oacute; los logros obtenidos, as&iacute; como las buenas perspectivas hacia el pr&oacute;ximo a&ntilde;o.</p>
',
                    'ruta' => 'imgnoticia_41.jpg?57',
                    'habilitado' => 1,
                    'portada' => 0,
                    'orden' => '',
                    'pdf' => '',
                    'otros' => NULL,
                    'image' => NULL,
                    'category_id' => 3,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                18 => 
                array (
                    'id' => 42,
                    'titulo' => 'CAMIMA participó de la 23º Conferencia Industrial de la UIA',
                'descripcion' => '<p>En la 23&ordm; Conferencia Industrial Argentina&nbsp;de&nbsp;la Uni&oacute;n Industria Argentina (UIA), la C&aacute;mara de la Peque&ntilde;a y Mediana Industria Metal&uacute;rgica Argentina (CAMIMA) particip&oacute; epresentada por Pablo Reale, Roxana Petracca y Aldo Lo Russo.</p>
',
                'breve' => '<p>En la 23&ordm; Conferencia Industrial Argentina&nbsp;de&nbsp;la Uni&oacute;n Industria Argentina (UIA), la C&aacute;mara de la Peque&ntilde;a y Mediana Industria Metal&uacute;rgica Argentina (CAMIMA) particip&oacute; epresentada por Pablo Reale, Roxana Petracca y Aldo Lo Russo.</p>
',
                    'ruta' => 'imgnoticia_42.jpg?63',
                    'habilitado' => 1,
                    'portada' => 0,
                    'orden' => '',
                    'pdf' => '',
                    'otros' => NULL,
                    'image' => NULL,
                    'category_id' => 3,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                19 => 
                array (
                    'id' => 43,
                    'titulo' => 'CAMIMA avala apertura de debate sobre la reforma impositiva y laboral y acuerdos sectoriales, en búsqueda de mejora de la productividad',
                'descripcion' => '<p>La C&aacute;mara de la Peque&ntilde;a y Mediana Industria Metal&uacute;rgica Argentina (CAMIMA) particip&oacute; de la 23&ordm; Conferencia Industrial Argentina, de la Uni&oacute;n Industrial Argentina (UIA). En este contexto, el titular de la entidad, Jos&eacute; Luis Ammaturo, destac&oacute; la apertura de debates sobre la reforma impositiva y laboral y se&ntilde;al&oacute; que &ldquo;es importante evaluar la posibilidad de avanzar con acuerdos sectoriales, que permitan mejorar la productividad&rdquo;.</p>

<p>&ldquo;Las pymes metal&uacute;rgicas, y el empresariado pyme en general, venimos desde hace a&ntilde;os advirtiendo sobre la pesada mochila impositiva que impide generar mayor empleo de calidad, ser competitivos con el mundo y tener previsibilidad para invertir&rdquo;, record&oacute; Ammaturo y consider&oacute; que &ldquo;por eso es tan importante que se abra el debate sobre este tema, se eval&uacute;en diferentes proyectos y se escuche la voz de todos los actores involucrados&rdquo;.</p>

<p>Al respecto, el presidente de CAMIMA indic&oacute;: &ldquo;Si bien no conocemos en detalle el proyecto presentado por el Gobierno nacional, destacamos que se haya abierto el debate y pedimos responsabilidad por parte de los legisladores, para aprobar una reforma que efectivamente aliviane las cargas impositivas, para que los empresarios pymes podamos invertir y aumentar la productividad&rdquo;.</p>

<p>En cuanto a la reforma laboral, Ammaturo se&ntilde;al&oacute; que tambi&eacute;n &ldquo;es otro debate que se debe dar&rdquo; y destac&oacute; que &ldquo;se plantee la posibilidad de avanzar en acuerdos sectoriales&rdquo;. &ldquo;Tanto los empresarios como los trabajadores sabemos la realidad de cada sector; no todos atravesamos la misma situaci&oacute;n, por eso es importante que podamos ir encontrando puntos de acuerdo que permitan generan nuevos puestos de trabajo de calidad&rdquo;, enfatiz&oacute;.</p>

<p>&ldquo;La actividad productiva tiene horizonte, pero hay que dar previsibilidad y crear condiciones para incentivarla. A eso deben apuntar &nbsp;las reformas&rdquo;, concluy&oacute; Ammaturo.</p>
',
                'breve' => '<p>La C&aacute;mara de la Peque&ntilde;a y Mediana Industria Metal&uacute;rgica Argentina (CAMIMA) particip&oacute; de la 23&ordm; Conferencia Industrial Argentina, de la Uni&oacute;n Industrial Argentina (UIA). En este contexto, el titular de la entidad, Jos&eacute; Luis Ammaturo, destac&oacute; la apertura de debates sobre la reforma impositiva y laboral y se&ntilde;al&oacute; que &ldquo;es importante evaluar la posibilidad de avanzar con acuerdos sectoriales, que permitan mejorar la productividad&rdquo;.</p>
',
                    'ruta' => 'imgnoticia_43.jpg?28',
                    'habilitado' => 1,
                    'portada' => 0,
                    'orden' => '',
                    'pdf' => '',
                    'otros' => NULL,
                    'image' => NULL,
                    'category_id' => 1,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                20 => 
                array (
                    'id' => 45,
                    'titulo' => 'Panel de Debate sobre la Reforma Laboral',
                'descripcion' => '<p>La C&aacute;mara de la Peque&ntilde;a y Mediana Industria Metal&uacute;rgica Argentina (CAMIMA) particip&oacute; de la 23&ordm; Conferencia Industrial Argentina, de la Uni&oacute;n Industrial Argentina (UIA).</p>

<div class="embed-responsive embed-responsive-16by9"><iframe class="embed-responsive-item" frameborder="0" scrolling="no" src="https://www.youtube.com/embed/yts-gLwrxEc"></iframe></div>
',
                'breve' => '<p>La C&aacute;mara de la Peque&ntilde;a y Mediana Industria Metal&uacute;rgica Argentina (CAMIMA) particip&oacute; de la 23&ordm; Conferencia Industrial Argentina, de la Uni&oacute;n Industrial Argentina (UIA).</p>
',
                    'ruta' => 'imgnoticia_45.jpg?45',
                    'habilitado' => 1,
                    'portada' => 0,
                    'orden' => 'zz',
                    'pdf' => '',
                    'otros' => NULL,
                    'image' => NULL,
                    'category_id' => 1,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                21 => 
                array (
                    'id' => 49,
                    'titulo' => 'Revista CAMIMA',
                    'descripcion' => '<p>Ya se puede descargar la nueva edición de la revista CAMIMA, de diciembre 2017</p>
',
                    'breve' => '<p>Ya se puede descargar la nueva edición de la revista CAMIMA, de diciembre 2017</p>
',
                    'ruta' => 'ofertas_49.jpg?93',
                    'habilitado' => 1,
                    'portada' => 0,
                    'orden' => '',
                    'pdf' => 'Camima 2017 web version 2.pdf?84',
                    'otros' => NULL,
                    'image' => NULL,
                    'category_id' => 1,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                22 => 
                array (
                    'id' => 50,
                    'titulo' => 'Frente a los hechos de violencia, ratificamos que el diálogo y el respeto a las instituciones es el único camino válido',
                    'descripcion' => '<p style="margin-left:0cm; margin-right:0cm"><span style="font-size:11pt"><span style="background-color:white"><span style="font-family:Calibri,sans-serif"><span style="color:#525252">Queremos expresar nuestro m&aacute;s profundo repudio a los hechos de violencia que sucedieron durante la jornada del lunes frente al Congreso de la Naci&oacute;n, en el marco del debate por la reforma previsional.</span></span></span></span></p>

<p style="margin-left:0cm; margin-right:0cm"><span style="font-size:11pt"><span style="background-color:white"><span style="font-family:Calibri,sans-serif"><span style="color:#525252">No s&oacute;lo fuimos testigos de los desmanes en las inmediaciones de la Plaza del Congreso a trav&eacute;s de los medios, sino que nuestras instalaciones tambi&eacute;n fueron afectadas por el lanzamiento de proyectiles por parte de un grupo de manifestantes.</span></span></span></span></p>

<p style="margin-left:0cm; margin-right:0cm"><span style="font-size:11pt"><span style="background-color:white"><span style="font-family:Calibri,sans-serif"><span style="color:#525252">Fueron horas de tensi&oacute;n y tristeza. Es necesario llamar a la reflexi&oacute;n respecto de estos sucesos: la violencia no conduce a nada constructivo, adem&aacute;s de empa&ntilde;ar la expresi&oacute;n leg&iacute;tima de la poblaci&oacute;n que se manifest&oacute; en forma pac&iacute;fica.</span></span></span></span></p>

<p style="margin-left:0cm; margin-right:0cm"><span style="font-size:11pt"><span style="background-color:white"><span style="font-family:Calibri,sans-serif"><span style="color:#525252">M&aacute;s all&aacute; de que estemos de acuerdo o no con las Leyes que debaten nuestros senadores y diputados, tenemos que entender que es parte de la din&aacute;mica de un pa&iacute;s maduro.</span></span></span></span></p>

<p style="margin-left:0cm; margin-right:0cm"><span style="font-size:11pt"><span style="background-color:white"><span style="font-family:Calibri,sans-serif"><span style="color:#525252">Respetar la democracia, las instituciones y los poderes de la Rep&uacute;blica son parte de un consenso que debemos defender entre todos. Recurrir a las agresiones, la alteraci&oacute;n del orden social o generar caos no es un m&eacute;todo leg&iacute;timo y nunca lo ha sido.</span></span></span></span></p>

<p style="margin-left:0cm; margin-right:0cm"><span style="font-size:11pt"><span style="background-color:white"><span style="font-family:Calibri,sans-serif"><span style="color:#525252">Apostemos siempre al di&aacute;logo y al debate de ideas, en todos los espacios. Esta es la v&iacute;a si queremos un pa&iacute;s serio, que pueda crecer y desarrollarse en paz, con reglas claras y oportunidades para todos.</span></span></span></span></p>

<p style="margin-left:0cm; margin-right:0cm"><span style="font-size:11pt"><span style="background-color:white"><span style="font-family:Calibri,sans-serif">&nbsp;</span></span></span></p>

<p style="margin-left:0cm; margin-right:0cm"><span style="font-size:11pt"><span style="background-color:white"><span style="font-family:Calibri,sans-serif"><span style="color:#525252">Jos&eacute; Luis Ammaturo</span></span></span></span></p>

<p style="margin-left:0cm; margin-right:0cm"><span style="font-size:11pt"><span style="background-color:white"><span style="font-family:Calibri,sans-serif"><span style="color:#525252">Presidente de la C&aacute;mara de la Peque&ntilde;a y Mediana Industria Metal&uacute;rgica Argentina (CAMIMA).</span></span></span></span></p>

<p style="margin-left:0cm; margin-right:0cm">&nbsp;</p>
',
                    'breve' => '<p style="margin-left:0cm; margin-right:0cm"><span style="font-size:11pt"><span style="background-color:white"><span style="font-family:Calibri,sans-serif"><span style="color:#525252">Queremos expresar nuestro m&aacute;s profundo repudio a los hechos de violencia que sucedieron durante la jornada del lunes frente al Congreso de la Naci&oacute;n, en el marco del debate por la reforma previsional.</span></span></span></span></p>

<p style="margin-left:0cm; margin-right:0cm"><span style="font-size:11pt"><span style="background-color:white"><span style="font-family:Calibri,sans-serif"><span style="color:#525252">No s&oacute;lo fuimos testigos de los desmanes en las inmediaciones de la Plaza del Congreso a trav&eacute;s de los medios, sino que nuestras instalaciones tambi&eacute;n fueron afectadas por el lanzamiento de proyectiles por parte de un grupo de manifestantes.</span></span></span></span></p>
',
                    'ruta' => 'imgnoticia_50.jpg?98',
                    'habilitado' => 1,
                    'portada' => 0,
                    'orden' => '',
                    'pdf' => '',
                    'otros' => NULL,
                    'image' => NULL,
                    'category_id' => 1,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                23 => 
                array (
                    'id' => 51,
                    'titulo' => 'La aprobación de la reforma tributaria, un avance importante',
                'descripcion' => '<p style="margin-left:0cm; margin-right:0cm"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">El presidente de la C&aacute;mara Argentina de la Peque&ntilde;a y Mediana Industria Metal&uacute;rgica (CAMIMA), Jos&eacute; Luis Ammaturo, destac&oacute; hoy la aprobaci&oacute;n de la reforma tributaria en el Senado de la Naci&oacute;n y confi&oacute; en que &ldquo;la reducci&oacute;n progresiva de cargas patronales &nbsp;y el alivio en el impuesto a las Ganancias redunde en mayores inversiones y generaci&oacute;n de empleo genuino&rdquo;.</span></span></p>

<p style="margin-left:0cm; margin-right:0cm"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">&ldquo;Desde hace a&ntilde;os, en el sector pyme venimos reclamando un debate sobre el esquema impositivo que ahoga a las empresas y genera condiciones de competitividad desfavorable para la industria argentina&rdquo;, record&oacute; Ammaturo y destac&oacute; que &ldquo;es un paso muy importante haber puesto el tema en el eje del debate del Congreso&rdquo;.</span></span></p>

<p style="margin-left:0cm; margin-right:0cm"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">&ldquo;Entendemos que todav&iacute;a falta mucho camino por recorrer y habr&aacute; que ver la implementaci&oacute;n de las reformas para que, efectivamente, beneficien a las peque&ntilde;as y medianas empresas, pero que se haya empezado a debatir y se haya dado este primer paso es fundamental para empezar a pensar a mediano y largo plazo&rdquo;, se&ntilde;al&oacute; el titular de CAMIMA.</span></span></p>

<p style="margin-left:0cm; margin-right:0cm"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">En igual sentido, Ammaturo subray&oacute; que &ldquo;alivianar la presi&oacute;n tributaria en forma gradual da previsibilidad y un horizonte que esperamos que apuntale las inversiones en el sector productivo&rdquo;.</span></span></p>

<p style="margin-left:0cm; margin-right:0cm"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">&ldquo;La mochila impositiva que cargan las pymes las pone en desventaja frente a competidores externos y la Argentina no puede estar aislada del mundo, sino que debe crear las condiciones necesarias para ser competitivos adentro y afuera del pa&iacute;s&rdquo;, opin&oacute; el presidente de CAMIMA.</span></span></p>

<p style="margin-left:0cm; margin-right:0cm"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">Al respecto, destac&oacute; los beneficios para la reinversi&oacute;n de utilidades, a trav&eacute;s de la reducci&oacute;n de la al&iacute;cuota de Ganancias. &ldquo;Necesitamos un pa&iacute;s donde las empresas tengan las condiciones m&iacute;nimas &nbsp;para invertir y, en este camino, el alivio en el Impuesto a las Ganancias es un gran paso&rdquo;, complet&oacute; Ammaturo.</span></span></p>
',
                'breve' => '<p style="margin-left:0cm; margin-right:0cm"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">El presidente de la C&aacute;mara Argentina de la Peque&ntilde;a y Mediana Industria Metal&uacute;rgica (CAMIMA), Jos&eacute; Luis Ammaturo, destac&oacute; hoy la aprobaci&oacute;n de la reforma tributaria en el Senado de la Naci&oacute;n y confi&oacute; en que &ldquo;la reducci&oacute;n progresiva de cargas patronales &nbsp;y el alivio en el impuesto a las Ganancias redunde en mayores inversiones y generaci&oacute;n de empleo genuino&rdquo;.</span></span></p>
',
                    'ruta' => 'imgnoticia_51.jpg?18',
                    'habilitado' => 1,
                    'portada' => 0,
                    'orden' => '',
                    'pdf' => '',
                    'otros' => NULL,
                    'image' => NULL,
                    'category_id' => 1,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                24 => 
                array (
                    'id' => 52,
                    'titulo' => 'Sobre los Aportes Compulsivos 1%',
                'descripcion' => '<p style="margin-left:0cm; margin-right:0cm"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">Extraemos los p&aacute;rrafos que juzgamos m&aacute;s importantes del art&iacute;culo suscripto por el Dr. Carlos F. Echezarreta que fuera publicado por la Editorial Errepar, en relaci&oacute;n con la contribuci&oacute;n con destino a la Asociaci&oacute;n de Industriales Metal&uacute;rgicos de la Rep&uacute;blica Argentina (ADIMRA) <em>(1% sobre el total de las remuneraciones brutas mensuales devengadas, correspondientes al personal convencionado)</em>, dispuesta por el acuerdo suscripto por esta c&aacute;mara empresarial y la Uni&oacute;n Obrera Metal&uacute;rgica (UOMRA) en el a&ntilde;o 2001, homologada mediante la resoluci&oacute;n (SsRL) 227/2001, de fecha 18 de octubre de ese a&ntilde;o, aclarada a trav&eacute;s de posteriores normativas de la cartera laboral <strong>y a la luz de diferentes pronunciamientos jurisprudenciales que cuestionan la procedencia de la misma.</strong></span></span></p>

<p style="margin-left:0cm; margin-right:0cm"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><strong>EL SECTOR EMPLEADOR EN EL CONVENIO COLECTIVO DE TRABAJO 260/1975</strong></span></span></p>

<p style="margin-left:0cm; margin-right:0cm"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">Se debe tener presente que en el a&ntilde;o 1975 la representaci&oacute;n del sector empleador en el marco del Convenio Colectivo de Trabajo 260/1975 estuvo a cargo de la Federaci&oacute;n Argentina de la Industria Metal&uacute;rgica, la Federaci&oacute;n Argentina de Industrias Metal&uacute;rgicas Livianas y Afines, y la Federaci&oacute;n Argentina de la Industria Metal&uacute;rgica del Interior.</span></span></p>

<p style="margin-left:0cm; margin-right:0cm"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">Esas entidades fueron sustituidas posteriormente en las negociaciones colectivas por la ADIMRA, la C&aacute;mara Argentina de la Industria del Aluminio y Metales Afines (CAIAMA), la Asociaci&oacute;n de F&aacute;bricas Argentinas de Terminales Electr&oacute;nicas (AFARTE), la Asociaci&oacute;n de F&aacute;bricas Argentinas de Componentes (AFAC), la C&aacute;mara de la Peque&ntilde;a y Mediana Industria Metal&uacute;rgica Argentina (CAMIMA) y la Federaci&oacute;n de C&aacute;maras Industriales de Artefactos para el Hogar de la Rep&uacute;blica Argentina (FEDEHOGAR).</span></span></p>

<p style="margin-left:0cm; margin-right:0cm"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><strong>Este es un elemento que le da una connotaci&oacute;n particular a esta contribuci&oacute;n: el acta fue suscripta por una sola de las seis entidades empresarias integrantes de la paritaria de la actividad con destino a su patrimonio. No obstante, la contribuci&oacute;n es exigida a todas las empresas representadas por las dem&aacute;s asociaciones de empleadores.</strong></span></span></p>

<p style="margin-left:0cm; margin-right:0cm"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><strong>EL MARCO LEGAL</strong></span></span></p>

<p style="margin-left:0cm; margin-right:0cm"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">Las disposiciones de la ley 14250 y de sus normas complementarias hacen referencia a que las cl&aacute;usulas contenidas en un convenio colectivo de trabajo alcanzan en forma excepcional a todos los trabajadores y empresas, est&eacute;n o no afiliadas a las entidades que los representan en la negociaci&oacute;n.</span></span></p>

<p style="margin-left:0cm; margin-right:0cm"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">En lo referente a la contribuci&oacute;n con destino a ADIMRA, se observa que no se trata de una norma convencional referida a las condiciones de trabajo, ni forma parte de las disposiciones obligacionales intercambiadas entre el sector sindical y empleador.</span></span></p>

<p style="margin-left:0cm; margin-right:0cm"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">En nuestro sistema jur&iacute;dico rige el principio que imposibilita que alguien sea constituido como deudor por la sola voluntad de quien se dice acreedor.</span></span></p>

<p style="margin-left:0cm; margin-right:0cm"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">Por ello, ADIMRA solo podr&iacute;a exigir las contribuciones que est&aacute;n autorizadas por sus estatutos y con referencia a sus empresas asociadas, pero no podr&iacute;a extenderlas obligatoriamente a las empresas no asociadas voluntariamente a ADIMRA y mucho menos a quienes est&eacute;n asociadas a otra entidad empresaria.</span></span></p>

<p style="margin-left:0cm; margin-right:0cm"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><strong>Se aclara que en el marco jur&iacute;dico de nuestro pa&iacute;s no se registra norma que permita perseguir el cobro de una contribuci&oacute;n de esta naturaleza a una empresa que no lo acepte voluntariamente, aun en el caso de estar afiliada a esta asociaci&oacute;n empresaria, porque bastar&iacute;a su renuncia para dejar de pagar tanto las cuotas societarias como este tipo de aportes.</strong></span></span></p>

<p style="margin-left:0cm; margin-right:0cm"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">En este sentido, la jurisprudencia se ha manifestado en forma expl&iacute;cita. <em>&ldquo;La constituci&oacute;n y funcionamiento de las asociaciones de empleadores se rigen por el derecho com&uacute;n&rdquo; y que &ldquo;no hay desde luego, ni en las normas de derecho colectivo de trabajo ni en las de derecho com&uacute;n, norma alguna que habilite tal tipo de contribuci&oacute;n&rdquo;.</em></span></span></p>

<p style="margin-left:0cm; margin-right:0cm"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><strong>CONCLUSI&Oacute;N</strong></span></span></p>

<p style="margin-left:0cm; margin-right:0cm"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><strong>En conclusi&oacute;n, seg&uacute;n la interpretaci&oacute;n reinante en la jurisprudencia, la ADIMRA no estar&iacute;a en posici&oacute;n de exigir suma alguna por este concepto a cualquier empresa que no sea asociada voluntariamente, menos aun cuando la misma se encuentre afiliada a otra entidad empresaria de la actividad metal&uacute;rgica que forma parte de la paritaria negociadora del convenio colectivo de trabajo.</strong></span></span></p>
',
                'breve' => '<p style="margin-left:0cm; margin-right:0cm"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">Extraemos los p&aacute;rrafos que juzgamos m&aacute;s importantes del art&iacute;culo suscripto por el Dr. Carlos F. Echezarreta que fuera publicado por la Editorial Errepar, en relaci&oacute;n con la contribuci&oacute;n con destino a la Asociaci&oacute;n de Industriales Metal&uacute;rgicos de la Rep&uacute;blica Argentina (ADIMRA) <em>(1% sobre el total de las remuneraciones brutas mensuales devengadas, correspondientes al personal convencionado)</em>, dispuesta por el acuerdo suscripto por esta c&aacute;mara empresarial y la Uni&oacute;n Obrera Metal&uacute;rgica (UOMRA) en el a&ntilde;o 2001, homologada mediante la resoluci&oacute;n (SsRL) 227/2001, de fecha 18 de octubre de ese a&ntilde;o, aclarada a trav&eacute;s de posteriores normativas de la cartera laboral <strong>y a la luz de diferentes pronunciamientos jurisprudenciales que cuestionan la procedencia de la misma.</strong></span></span></p>
',
                    'ruta' => 'ofertas_52.jpg?95',
                    'habilitado' => 1,
                    'portada' => 1,
                    'orden' => '',
                    'pdf' => '',
                    'otros' => NULL,
                    'image' => NULL,
                    'category_id' => 3,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                25 => 
                array (
                    'id' => 53,
                    'titulo' => 'Aniversario de Lextral SRL',
                    'descripcion' => '<p style="margin-left:0cm; margin-right:0cm; text-align:justify"><span style="font-size:14px"><span style="font-family:Arial,Helvetica,sans-serif">El 16 de diciembre pasado la firma Lextral SRL festej&oacute; un nuevo aniversario de su extensa actuaci&oacute;n como empresa pyme nacional. </span></span></p>

<p style="margin-left:0cm; margin-right:0cm; text-align:justify"><span style="font-size:14px"><span style="font-family:Arial,Helvetica,sans-serif">La&nbsp; firma fue creada en 1941 y <span style="background-color:white"><span style="color:#353d40">&nbsp;a partir de 1965 comenz&oacute; a desenvolverse como empresa de ingenier&iacute;a de almacenamiento y movimiento de materiales.</span></span></span></span></p>

<p><span style="font-family:Arial,Helvetica,sans-serif; font-size:14px">En la actualidad es l&iacute;der en la fabricaci&oacute;n de equipos para movimientos de materiales, tales como elevadores standard y especiales, tanto de traslaci&oacute;n manual y elevaci&oacute;n hidr&aacute;ulica como totalmente motorizados, para cargas de hasta 1600 kg.</span></p>

<p style="margin-left:0cm; margin-right:0cm; text-align:justify"><span style="font-size:14px"><span style="font-family:Arial,Helvetica,sans-serif">Lextral SRL ha sido y sigue siendo socia de nuestra entidad y su titular, Juan B. Giraudi, ocup&oacute; cargos, incluida la vicepresidencia&nbsp;en la Comisi&oacute;n Directiva.</span></span></p>

<p style="margin-left:0cm; margin-right:0cm; text-align:justify"><span style="font-size:14px"><span style="font-family:Arial,Helvetica,sans-serif">CAMIMA se hizo presente en el festejo, entregando una plaqueta conmemorativa, y expresando en breves palabras el reconocimiento a la firma, por su extensa y reconocida presencia en el &aacute;mbito nacional y su participaci&oacute;n y colaboraci&oacute;n permanente en el quehacer de la c&aacute;mara.</span></span></p>
',
                    'breve' => '<p style="margin-left:0cm; margin-right:0cm; text-align:justify"><span style="font-size:14px"><span style="font-family:Arial,Helvetica,sans-serif">El 16 de diciembre pasado la firma Lextral SRL festej&oacute; un nuevo aniversario de su extensa actuaci&oacute;n como empresa pyme nacional. </span></span></p>

<p style="margin-left:0cm; margin-right:0cm; text-align:justify"><span style="font-size:14px"><span style="font-family:Arial,Helvetica,sans-serif">La&nbsp; firma fue creada en 1941 y <span style="background-color:white"><span style="color:#353d40">&nbsp;a partir de 1965 comenz&oacute; a desenvolverse como empresa de ingenier&iacute;a de almacenamiento y movimiento de materiales.</span></span></span></span></p>
',
                    'ruta' => 'ofertas_53.jpg?93',
                    'habilitado' => 1,
                    'portada' => 0,
                    'orden' => '',
                    'pdf' => '',
                    'otros' => NULL,
                    'image' => NULL,
                    'category_id' => 3,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                26 => 
                array (
                    'id' => 54,
                    'titulo' => 'Opinión: Generar trabajo es disminuir la pobreza',
                    'descripcion' => '<p style="margin-left:0cm; margin-right:0cm"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">Durante mucho tiempo, pol&iacute;ticos, dirigentes sindicales y empresariales, jueces y funcionarios, miraron hacia otro lado respecto de las pol&iacute;ticas laborales; permitiendo por acci&oacute;n u omisi&oacute;n que las cargas hacia el trabajo se incrementaran incesantemente, contribuyendo a los altos costos laborales que tenemos actualmente.</span></span></p>

<p style="margin-left:0cm; margin-right:0cm"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">Estas imposiciones sobre el salario del trabajador incluyen aportes jubilatorios (que maneja el Estado o Gobierno de turno a su antojo), obra social (manejadas por sindicatos que no brindan prestaciones adecuadas), ART (sistema de seguridad en el trabajo que incrementa continuamente su al&iacute;cuota debido a la alta litigiosidad), INSSJP (para pagar los servicios m&eacute;dicos a los Jubilados, malos e insuficientes), cuota sindical (obligatoria est&eacute;n o no afiliados), seguro de vida y seguro de sepelio (valores alt&iacute;simos de al&iacute;cuota para un sector de la poblaci&oacute;n sana en condiciones de trabajar), cuota empresarial (que algunas c&aacute;maras o asociaciones empresariales indican como obligatoria, aunque la ley no lo permita). Todas ellas alcanzan valores cercanos al 70% de lo que percibe en bolsillo el trabajador.</span></span></p>

<p style="margin-left:0cm; margin-right:0cm"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">Algunos dir&aacute;n que muchas de estas imposiciones no son impuestos, que son salarios diferidos, pero por un minuto imaginemos que le entregamos todo el dinero al trabajador de su sueldo ($ 170 en lugar de $ 100), y tuviese la libertad (en un contexto econ&oacute;mico competente) de elegir su obra social, su administradora de fondos jubilatorios, sus seguros, su sindicato, entre otros, con seguridad lograr&iacute;a imposiciones menores y obtendr&iacute;a mayores beneficios, como sucede en el resto del mundo desarrollado. Ese diferencial es lo que denomino Impuesto al Trabajo, imposiciones obligatorias que se administran mal o incrementan solamente los bolsillos de algunos. Estamos inmersos en un sistema perverso, por un lado necesitamos generar mayores puestos de trabajo y pagar mejores salarios a nuestros trabajadores, y por el otro cargamos a los sueldos con todo tipo de imposiciones, lo cual ha llevado a nuestro pa&iacute;s a tener los m&aacute;s altos costos laborales. La Argentina en la actualidad tiene el mayor costo laboral de Latinoam&eacute;rica y es primero en porcentaje de cargas impuestas al trabajador a&uacute;n entre los pa&iacute;ses desarrollados del Mundo.</span></span></p>

<p style="margin-left:0cm; margin-right:0cm"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">El &uacute;ltimo informe de Competitividad global del World Economic Forum (2016/2017), ubica a la Argentina en la posici&oacute;n 104, dentro de un grupo de 138 pa&iacute;ses. Cuando uno se adentra en el informe, que estudia la competitividad dividida en 12 pilares fundamentales, observa en particular uno de ellos: &acute;Eficiencia del Mercado Laboral&acute;, donde se nos ubica en el puesto 130, por debajo de Argelia, Republica Dominicana o Mozambique, entre otros.</span></span></p>

<p style="margin-left:0cm; margin-right:0cm"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">No solo encarecen el trabajo las cargas directas e impositivas, si no otros aspectos como las malas relaciones laborales, la legislaci&oacute;n aplicada pro trabajador (y no pro trabajo), los costos de contrataci&oacute;n y despido, para citar solo algunos.</span></span></p>

<p style="margin-left:0cm; margin-right:0cm"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">Esta situaci&oacute;n no solo significa menor competitividad, si no que se traduce en menos puestos de trabajo, sueldos bajos, y trabajo en la informalidad. Podemos expresar -sin miedo a equivocarnos-que nuestro actual sistema laboral crea pobreza.</span></span></p>

<p style="margin-left:0cm; margin-right:0cm"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">El problema se tornar&aacute; a&uacute;n m&aacute;s sombr&iacute;o en un futuro inmediato si no tomamos las medidas correctas a tiempo. Nos encontramos ante un mundo que cambia aceleradamente, debido principalmente a tres factores: la mayor expectativa de vida, la globalizaci&oacute;n y el cambio tecnol&oacute;gico.</span></span></p>

<p style="margin-left:0cm; margin-right:0cm"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">El conjunto de estos tres factores producir&aacute; desequilibrios en la movilidad laboral, la forma de producci&oacute;n y los sistemas econ&oacute;micos como hoy los conocemos.</span></span></p>

<p style="margin-left:0cm; margin-right:0cm"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">No podemos dejarnos estar, no podemos seguir con nuestro arcaico sistema laboral. El futuro es hoy, estamos obligados a actualizar nuestra legislaci&oacute;n y las relaciones laborales, adem&aacute;s de nuestro sistema impositivo, para no perder el tren de la actual revoluci&oacute;n tecnol&oacute;gica y sumir a la Argentina en la pobreza.</span></span></p>

<p style="margin-left:0cm; margin-right:0cm">&nbsp;</p>

<p style="margin-left:0cm; margin-right:0cm"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">Jos&eacute;&nbsp;Luis Ammaturo</span></span></p>

<p style="margin-left:0cm; margin-right:0cm"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">Presidente de CAMIMA</span></span></p>

<p style="margin-left:0cm; margin-right:0cm"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">https://www.cronista.com/columnistas/Generar-trabajo-es-disminuir-la-pobreza-20180223-0040.html</span></span></p>
',
                'breve' => '<p><span style="font-size:11.0pt">Nota de opini&oacute;n del presidente de la C&aacute;mara de la Peque&ntilde;a y Mediana Industria Metal&uacute;rgica Argentina (CAMIMA), Jos&eacute; Luis Ammaturo, publicada en el diario y en la web de El Cronista.</span></p>
',
                    'ruta' => 'ofertas_54.jpg?50',
                    'habilitado' => 1,
                    'portada' => 0,
                    'orden' => '',
                    'pdf' => '',
                    'otros' => NULL,
                    'image' => NULL,
                    'category_id' => 1,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                27 => 
                array (
                    'id' => 55,
                    'titulo' => 'CAMIMA participó de una reunión en la UIA',
                'descripcion' => '<p><span style="font-family:Arial,Helvetica,sans-serif"><span style="font-size:14px">El gerente general de la C&aacute;mara de la Peque&ntilde;a y Mediana Industria Metal&uacute;rgica Argentina (CAMIMA), Fernando Ruiz y Blanco, particip&oacute; hoy de una reuni&oacute;n en la Uni&oacute;n Industrial Argentina (UIA), encabezada por el director ejecutivo y economista jefe de la entidad, Diego Koatz, que convoc&oacute; a los directores ejecutivos de c&aacute;maras de diferentes sectores, entidades regionales, que integran la UIA.<br />
Durante el encuentro se analiz&oacute; la evoluci&oacute;n de la econom&iacute;a durante el a&ntilde;o 2017, la situaci&oacute;n de la industria en las distintas actividades y las perspectivas para el 2018. Se repasaron temas clave, que ya han tenido o van a tener tratamiento parlamentario: Ley de Reforma Tributaria, Ley Previsional, Ley de Compre Nacional, ya sancionadas, y Reforma Laboral, que ha pasado para su eventual tratamiento en 2018. Temas que forman parte de las problem&aacute;ticas que se vienen planteando desde el sector empresario y desde otros sectores de la actividad econ&oacute;mica.<br />
Otro de los temas que se trataron durante la reuni&oacute;n gir&oacute; en torno del calendario de actividades para el 2018, donde adquiere especial relevancia la reuni&oacute;n del G20, que tendr&aacute; lugar este a&ntilde;o en la Argentina, en el mes de octubre. Durante el a&ntilde;o se concretar&aacute;n numerosos encuentros de trabajo de comisiones integradas por especialistas de los diversos pa&iacute;ses miembro, como preparaci&oacute;n para el encuentro final de los mandatarios que integran el G20. T&eacute;cnicos representantes de entidades y de la UIA formar&aacute;n parte de muchas de esas comisiones.</span></span><br />
&nbsp;</p>
',
                'breve' => '<p><span style="font-family:Arial,Helvetica,sans-serif"><span style="font-size:16px">El gerente general de la C&aacute;mara de la Peque&ntilde;a y Mediana Industria Metal&uacute;rgica Argentina (CAMIMA), Fernando Ruiz y Blanco, particip&oacute; hoy de una reuni&oacute;n en la Uni&oacute;n Industrial Argentina (UIA), encabezada por el director ejecutivo y economista jefe de la entidad, Diego Koatz, que convoc&oacute; a los directores ejecutivos de c&aacute;maras de diferentes sectores, entidades regionales, que integran la UIA.</span></span></p>
',
                    'ruta' => 'imgnoticia_55.jpg?31',
                    'habilitado' => 1,
                    'portada' => 0,
                    'orden' => '',
                    'pdf' => '',
                    'otros' => NULL,
                    'image' => NULL,
                    'category_id' => 3,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                28 => 
                array (
                    'id' => 57,
                    'titulo' => 'CAMIMA y la SRT realizaron una reunión para abordar diferentes aspectos del riesgo del trabajo',
                'descripcion' => '<p>La Superintendencia de Riesgos del Trabajo (SRT) y la C&aacute;mara de la Peque&ntilde;a y Mediana Industria Metal&uacute;rgica Argentina (CAMIMA) organizaron, en la sede de la entidad empresaria, una reuni&oacute;n informativa sobre los alcances de la nueva Ley de Riesgos del Trabajo N&ordm; 27.348.&nbsp;<br />
Por la Superintendencia de Riesgos del Trabajo estuvieron presentes el Dr. Joaqu&iacute;n Malbr&aacute;n, subgerente de Coordinaci&oacute;n con Provincias, y An&iacute;bal Lionti, jefe del Departamento de Apoyo de Control, acompa&ntilde;ados por colaboradores.&nbsp;<br />
Por CAMIMA asistieron a la reuni&oacute;n empresarios y representantes de las &aacute;reas de administraci&oacute;n y RRHH de numerosas empresas.<br />
La Ley N&ordm; 27.348 establece, entre otros aspectos , que la actuaci&oacute;n de las comisiones m&eacute;dicas jurisdiccionales constituir&aacute;n la instancia administrativa previa, de car&aacute;cter obligatorio y excluyente de toda otra intervenci&oacute;n, para que el trabajador afectado, contando con el debido patrocinio letrado, solicite la determinaci&oacute;n del car&aacute;cter profesional de su enfermedad o contingencia, la determinaci&oacute;n de su incapacidad y las correspondientes prestaciones dinerarias previstas en la Ley de Riesgos del Trabajo.<br />
Algunos de los temas que son tratados son los siguientes:&nbsp;<br />
-Los alcances y beneficios de la nueva ley 27.348, complementaria de la ley de riesgos del trabajo 24.557.&nbsp;<br />
-Aspectos de la ley, aportando datos estad&iacute;sticos.<br />
-Funciones de la Superintendencia de Riesgos del Trabajo y de las Comisiones Medicas.<br />
-Jurisdiccionales: Tramites m&eacute;dicos laborales.<br />
- Derechos y obligaciones de la ART.<br />
Los asistentes, empresarios y representantes, tuvieron la oportunidad de intercambiar preguntas e inquietudes con los funcionarios sobre situaciones concretas que afectan a las pymes dentro del tema planteado.&nbsp;<br />
Es importante destacar la predisposici&oacute;n de los funcionarios para responder y especialmente qued&oacute; abierta la posibilidad de acceder al asesoramiento de la Superintendencia para atender las dificultades que pudieran enfrentar las empresas y colaborar en su resoluci&oacute;n.&nbsp;<br />
&nbsp;</p>
',
                'breve' => '<p><span style="font-size:14px">La Superintendencia de Riesgos del Trabajo (SRT) y la C&aacute;mara de la Peque&ntilde;a y Mediana Industria Metal&uacute;rgica Argentina (CAMIMA) organizaron, en la sede de la entidad empresaria, una reuni&oacute;n informativa sobre los alcances de la nueva Ley de Riesgos del Trabajo N&ordm; 27.348.&nbsp;</span></p>
',
                    'ruta' => 'ofertas_57.jpg?28',
                    'habilitado' => 1,
                    'portada' => 1,
                    'orden' => '',
                    'pdf' => '',
                    'otros' => NULL,
                    'image' => NULL,
                    'category_id' => 3,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                29 => 
                array (
                    'id' => 58,
                    'titulo' => 'Desarrollarse e innovar, el gran desafío de la industria metalúrgica argentina',
                    'descripcion' => '<p><span style="font-size:14px">El presidente de la c&aacute;mara de Pymes metal&uacute;rgicas se hace eco de la historia de este sector industrial y convoca a actuar proactivamente ante la revoluci&oacute;n tecnol&oacute;gica, en un mundo globalizado.</span></p>

<p><span style="font-size:14px"><strong>Por Jos&eacute;&nbsp;Luis Ammaturo* (<em>Especial para Multitaskers</em>)</strong></span></p>

<p>&nbsp;</p>

<p><span style="font-size:14px">Funcionan cerca de 25.000 empresas pymes metal&uacute;rgicas en la Argentina, generando m&aacute;s del 20% del empleo industrial, y participan aproximadamente en el mismo porcentaje en el PBI industrial, un sector que supo ser fuerte en el pasado, y que puede serlo una vez m&aacute;s, si acepta el gran desaf&iacute;o que significa la revoluci&oacute;n tecnol&oacute;gica en un mundo globalizado.</span></p>

<p><span style="font-size:14px">La industria argentina ha sido como un boxeador que, por miedo a caer noqueado, busc&oacute; siempre la protecci&oacute;n, tener una guardia alta para recibir los menores golpes posibles. Durante mucho tiempo crey&oacute; y apost&oacute; a esa protecci&oacute;n, e igual de a poco recibi&oacute; golpes que fueron minando su capacidad, se olvid&oacute; as&iacute; de golpear, de fortalecer sus m&uacute;sculos, de mejorar sus aptitudes, de luchar, y hoy nos debemos dar cuenta que las peleas se ganan con buenos y certeros golpes, no solo protegi&eacute;ndose detr&aacute;s de una guardia.</span></p>

<p><span style="font-size:14px">Parad&oacute;jicamente, la Industria metal&uacute;rgica necesita hoy m&aacute;s que nunca de esa protecci&oacute;n, porque si no la tuviese irremediablemente ser&iacute;a noqueada; pero esa protecci&oacute;n debe ser selectiva y no pensar en que ser&aacute; eterna; debemos acostumbrarnos a pelear, a ser competitivos dentro de un Estado moderno y una sociedad cada vez m&aacute;s exigente, pero que a la vez entienda que la &uacute;nica forma de progresar es desarrollarse y ser cada vez m&aacute;s de avanzada en todas las &aacute;reas.</span></p>

<p>&nbsp;</p>

<p><span style="font-size:14px"><strong>Un futuro de desaf&iacute;os</strong></span></p>

<p><span style="font-size:14px">El empresario Pyme debe saber que el futuro no se presenta f&aacute;cil, deber&aacute; investigar, analizar, examinar, invertir, estudiar, probar, modificar, reorganizar, mejorar, arriesgar, ordenar, adecuar, innovar, reconvertirse, renovar y por sobre todo animarse en un mundo adverso y competitivo.</span></p>

<p><span style="font-size:14px">A trav&eacute;s de los a&ntilde;os como ingeniero mec&aacute;nico y laboral, como industrial y dirigente gremial empresario, supe conocer y comprender a los industriales pymes metal&uacute;rgicos, aprend&iacute; de sus or&iacute;genes e historias, supe de sus sue&ntilde;os y de sus problemas, y s&eacute; los capaces que pueden ser afrontando los desaf&iacute;os, s&eacute; que les sobran anhelos, pero le faltan incentivos; un Estado presente, pero no asfixiante y una sociedad que los acompa&ntilde;e.</span></p>

<p><span style="font-size:14px">Nos amilana la inseguridad jur&iacute;dica, la voracidad fiscal, las leyes laborales retrogradas, la deficiencia educacional, los sobrecostos, las continuas trabas y la falta de pol&iacute;ticas industriales activas a lo largo del tiempo.</span></p>

<p><span style="font-size:14px">Ante este panorama podemos hacer mucho puertas adentro de nuestras industrias, como mejorar procesos, aumentar productividad, incentivar, potenciar relaciones laborales, entre otros, pero poco podemos hacer por fuera de nuestras f&aacute;bricas.</span></p>

<p>&nbsp;</p>

<h3><span style="font-size:14px"><strong>Contexto adverso</strong></span></h3>

<p><span style="font-size:14px">Fuera de las industrias, nuestros productos aumentan sus costos y pierden competitividad, son el producto de una carga impositiva confiscatoria; fletes y log&iacute;stica con muy altos costos; seguros altos por la incertidumbre e inseguridad; infraestructura deficiente; regulaciones laborales r&iacute;gidas; sistema judicial perverso, etc&eacute;tera, etc&eacute;tera.</span></p>

<p><span style="font-size:14px">Los industriales Pymes metal&uacute;rgicos estamos obligados a pelear tanto dentro como fuera de nuestras f&aacute;bricas si queremos crecer, no hay otra alternativa que luchar y qu&eacute; mejor que hacerlo unidos. Recordemos a Bertolt Breach: &ldquo;Quien no ha compartido la lucha, compartir&aacute; la derrota&rdquo;.</span></p>

<p>&nbsp;</p>

<p><span style="font-size:14px"><strong>* Jose Luis Ammaturo es ingeniero mec&aacute;nico y laboral, industrial Pyme metal&uacute;rgico y residente de la C&aacute;mara de la Peque&ntilde;a y Mediana Industria Metal&uacute;rgica Argentina (CAMIMA).</strong></span></p>

<p>&nbsp;</p>

<p><strong><span style="font-size:14px">Para leer la nota en el sitio web <a href="https://www.amexcorporate.com.ar/multitaskers/nota.php?id=760&amp;cat=5">click aqu&iacute;&nbsp;</a></span></strong></p>

<p>&nbsp;</p>
',
                'breve' => '<p><span style="font-size:16px">Compartimos la columna de opini&oacute;n que el presidente de la&nbsp;C&aacute;mara de la Peque&ntilde;a y Mediana Industria Metal&uacute;rgica Argentina (CAMIMA), Jos&eacute; Luis Ammaturo, escribi&oacute; especialmente para Multitaskers de American Express.</span></p>
',
                    'ruta' => 'imgnoticia_58.jpg?50',
                    'habilitado' => 1,
                    'portada' => 1,
                    'orden' => '',
                    'pdf' => '',
                    'otros' => NULL,
                    'image' => NULL,
                    'category_id' => 1,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                30 => 
                array (
                    'id' => 59,
                    'titulo' => 'Participación del presidente de CAMIMA en el Canal Somos, de Cablevisión',
                    'descripcion' => '<p><span style="font-size:14px">El presidente de CAMIMA, Jos&eacute; Luis Ammaturo, particip&oacute; del programa Aqu&iacute; Ahora, que conduce Jorge Ch&iacute;o, y se emite&nbsp;por el Canal 7, de Cablevisi&oacute;n; Canal 607, de HD y Canal 517, de Flow Cablevisi&oacute;n.</span></p>

<p>&nbsp;</p>

<p><strong><span style="font-size:14px">Pod&eacute;s verlo haciendo </span><a href="https://www.youtube.com/watch?v=0be1GRxy5QU&amp;feature=youtu.be" style="font-size: 14px;">click aqu&iacute;&nbsp;</a></strong></p>
',
                    'breve' => '<p><span style="font-size:14px">El presidente de CAMIMA, Jos&eacute; Luis Ammaturo, particip&oacute; del programa Aqu&iacute; Ahora, que conduce Jorge Ch&iacute;o, y se emite&nbsp;por el Canal 7, de Cablevisi&oacute;n; Canal 607, de HD y Canal 517, de Flow Cablevisi&oacute;n.</span></p>

<p>&nbsp;</p>
',
                    'ruta' => 'imgnoticia_59.jpeg?97',
                    'habilitado' => 1,
                    'portada' => 1,
                    'orden' => '',
                    'pdf' => '',
                    'otros' => NULL,
                    'image' => NULL,
                    'category_id' => 1,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                31 => 
                array (
                    'id' => 60,
                    'titulo' => 'Modificación de la Ley de Compre Nacional: CAMIMA pide que se creen mecanismos de control para garantizar su cumplimiento',
                'descripcion' => '<p style="margin-left:0cm; margin-right:0cm"><span style="font-size:12pt"><span style="background-color:white"><span style="font-size:9.5pt"><span style="color:#222222">El presidente de la C&aacute;mara de la Peque&ntilde;a y Mediana Industria Metal&uacute;rgica Argentina (CAMIMA), Jos&eacute; Luis Ammaturo, destac&oacute; hoy que &ldquo;es muy importante para la industria argentina la modificaci&oacute;n de la Ley de Compre Nacional, porque ampl&iacute;a los m&aacute;rgenes de participaci&oacute;n de las pymes en los procesos de compra de bienes por parte de las empresas del Estado, incluida YPF&rdquo;, pero advirti&oacute; que &ldquo;para que este mecanismo sea realmente efectivo, deber&aacute;n controlarse los procesos involucrados en la compra, de manera tal de cumplir con el objetivo final de apuntalar la producci&oacute;n local y aumentar la mano de obra de las pymes&rdquo;.</span></span></span></span></p>

<p style="margin-left:0cm; margin-right:0cm"><span style="font-size:12pt"><span style="background-color:white"><span style="font-size:9.5pt">Ammaturo se refiri&oacute; de este modo tras la sanci&oacute;n por parte del Senado de las modificaciones de la Ley de Compre Nacional, eleva al 15% el margen de diferencia a favor de las pymes sobre los valores de otras ofertas en los procesos de compra del Estado y establece que si una empresa extranjera gana una licitaci&oacute;n de obra p&uacute;blica deber&aacute; subcontratar empresas nacionales hasta cubrir un 20% del valor de la obra.&nbsp;</span></span></span></p>

<p style="margin-left:0cm; margin-right:0cm"><span style="font-size:12pt"><span style="background-color:white"><span style="font-size:9.5pt">&ldquo;Si bien la Ley fija sanciones por el incumplimiento de los distintos puntos de la normativa, que consistir&aacute; en multas desde el 5 al 50% del monto del contrato, es fundamental que existan mecanismos que permitan controlar y garantizar su cumplimiento&rdquo;, se&ntilde;al&oacute; Ammaturo.</span></span></span></p>

<p style="margin-left:0cm; margin-right:0cm"><span style="font-size:12pt"><span style="background-color:white"><span style="font-size:9.5pt">Al respecto, el titular de CAMIMA record&oacute;: &ldquo;En las distintas reuniones en las que hemos participado para colaborar en el dise&ntilde;o de esta nueva Ley, hemos se&ntilde;alado la importancia de establecer eficientes mecanismos de control y esperamos que se avance y se cumpla con eso&rdquo;.</span></span></span></p>

<p style="margin-left:0cm; margin-right:0cm"><span style="font-size:12pt"><span style="background-color:white"><span style="font-size:9.5pt">En igual sentido, Ammaturo reafirm&oacute; que &ldquo;&middot;las pymes generan m&aacute;s del 70 por ciento del trabajo argentino por eso resulta fundamental que el organismo de aplicaci&oacute;n vele por su cumplimiento, de forma tal que se beneficie realmente al entramado pyme&rdquo;.</span></span></span></p>

<p style="margin-left:0cm; margin-right:0cm"><span style="font-size:12pt"><span style="background-color:white"><span style="font-size:9.5pt">&ldquo;Se estima que en los pr&oacute;ximos ocho a&ntilde;os, las empresas del sector p&uacute;blico inviertan m&aacute;s de 200.000 millones de d&oacute;lares, y si se efectivamente se cumple esta nueva Ley, las empresas nacionales van a tener un fuerte respaldo para seguir generando trabajo y apuntalar el crecimiento del pa&iacute;s&rdquo;, concluy&oacute; al titular de CAMIMA.</span></span></span></p>
',
                'breve' => '<p style="margin-left:0cm; margin-right:0cm"><span style="font-size:12pt"><span style="background-color:white"><span style="font-size:9.5pt"><span style="color:#222222">El presidente de la C&aacute;mara de la Peque&ntilde;a y Mediana Industria Metal&uacute;rgica Argentina (CAMIMA), Jos&eacute; Luis Ammaturo, destac&oacute; hoy que &ldquo;es muy importante para la industria argentina la modificaci&oacute;n de la Ley de Compre Nacional, porque ampl&iacute;a los m&aacute;rgenes de participaci&oacute;n de las pymes en los procesos de compra de bienes por parte de las empresas del Estado, incluida YPF&rdquo;, pero advirti&oacute; que &ldquo;para que este mecanismo sea realmente efectivo, deber&aacute;n controlarse los procesos involucrados en la compra, de manera tal de cumplir con el objetivo final de apuntalar la producci&oacute;n local y aumentar la mano de obra de las pymes&rdquo;.</span></span></span></span></p>
',
                    'ruta' => 'ofertas_60.jpg?92',
                    'habilitado' => 1,
                    'portada' => 1,
                    'orden' => '',
                    'pdf' => '',
                    'otros' => NULL,
                    'image' => NULL,
                    'category_id' => 1,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                32 => 
                array (
                    'id' => 61,
                    'titulo' => 'Se firmó acuerdo salarial con ASIMRA, que establece un incremento del 15%',
                'descripcion' => '<p style="margin-left:0cm; margin-right:0cm"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">La C&aacute;mara de la Peque&ntilde;a y Mediana Industria Metal&uacute;rgica Argentina (CAMIMA), junto a otras c&aacute;maras empresarias del sector, firm&oacute; el acuerdo salarial 2018 con la Asociaci&oacute;n de Supervisores de la Industria Metalmec&aacute;nica de la Rep&uacute;blica Argentina (ASIMRA), que fue ratificado hoy en el Ministerio de Trabajo, Empleo y Seguridad Social. Consiste en un aumento del 15 por ciento en dos cuotas no acumulativas; un bono de 4700 pesos remunerativos pagaderos en dos cuotas, y una cl&aacute;usula de revisi&oacute;n en diciembre.</span></span></p>

<p style="margin-left:0cm; margin-right:0cm"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">El convenio establece que el 15 por ciento de incremento se pagar&aacute; en dos cuotas no acumulativas; la primera del 10 por ciento retroactiva a mayo y otra del 5 por ciento en septiembre. Adem&aacute;s, se pagar&aacute; un bono de 4700 pesos remunerativos en dos cuotas de 2350 pesos cada una, en enero y marzo de 2019. El acuerdo incorpora una cl&aacute;usula de revisi&oacute;n para diciembre de este a&ntilde;o.</span></span></p>

<p style="margin-left:0cm; margin-right:0cm"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">Asimismo, las empresas aportar&aacute;n a ASIMRA una contribuci&oacute;n de 700 pesos en siete cuotas de 100 pesos cada una, por cada trabajador registrado en su firma, para planes de capacitaci&oacute;n. </span></span></p>

<p style="margin-left:0cm; margin-right:0cm"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">&ldquo;Mantenemos un permanente di&aacute;logo con los trabajadores que nos permiti&oacute; alcanzar este acuerdo lejos de cualquier conflicto&rdquo;, destac&oacute; el presidente de CAMIMA, Jos&eacute; Luis Ammaturo.</span></span></p>

<p style="margin-left:0cm; margin-right:0cm"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">Ammaturo se&ntilde;al&oacute; tambi&eacute;n que el aumento acordado &ldquo;atiende las necesidades de los trabajadores, sin afectar la actividad productiva y dentro de las pautas que permiten hacer previsible la econom&iacute;a del pa&iacute;s&rdquo;.</span></span></p>

<p style="margin-left:0cm; margin-right:0cm"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">El acuerdo fue suscripto por CAMIMA, ADIMRA, AFARTE, FEDEHOGAR y CAIAMA.</span></span></p>
',
                'breve' => '<p style="margin-left:0cm; margin-right:0cm"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">La C&aacute;mara de la Peque&ntilde;a y Mediana Industria Metal&uacute;rgica Argentina (CAMIMA), junto a otras c&aacute;maras empresarias del sector, firm&oacute; el acuerdo salarial 2018 con la Asociaci&oacute;n de Supervisores de la Industria Metalmec&aacute;nica de la Rep&uacute;blica Argentina (ASIMRA), que fue ratificado hoy en el Ministerio de Trabajo, Empleo y Seguridad Social. Consiste en un aumento del 15 por ciento en dos cuotas no acumulativas; un bono de 4700 pesos remunerativos pagaderos en dos cuotas, y una cl&aacute;usula de revisi&oacute;n en diciembre.</span></span></p>
',
                    'ruta' => 'imgnoticia_61.jpg?88',
                    'habilitado' => 1,
                    'portada' => 0,
                    'orden' => '',
                    'pdf' => '',
                    'otros' => NULL,
                    'image' => NULL,
                    'category_id' => 2,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                33 => 
                array (
                    'id' => 63,
                    'titulo' => 'Paritaria 2018: El Ministerio de Trabajo homologó el acuerdo con la UOM',
                'descripcion' => '<p style="margin-left:0cm; margin-right:0cm"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">El Ministerio de Trabajo, Empleo y Seguridad Social homolog&oacute; hoy el acuerdo salarial 2018, firmado entre la C&aacute;mara de la Peque&ntilde;a y Mediana Industria Metal&uacute;rgica (CAMIMA), junto a otras c&aacute;maras del sector, y la Uni&oacute;n Obrera Metal&uacute;rgica (UOM), que estipula un aumento del 15,5 por ciento en dos tramos acumulativos: el primero del 9 por ciento retroactivo a abril pasado y otro de 6 por ciento, en julio pr&oacute;ximo. Adem&aacute;s, establece una cl&aacute;usula de revisi&oacute;n en diciembre de este a&ntilde;o.</span></span></p>

<p style="margin-left:0cm; margin-right:0cm"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">El convenio hab&iacute;a sido firmado el 10 de mayo pasado, pero hoy fue homologado por el Ministerio de Trabajo, paso fundamental para su entrada en vigencia formal.</span></span></p>

<p style="margin-left:0cm; margin-right:0cm"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">&ldquo;El acuerdo se alcanz&oacute; tras intensas negociaciones paritarias, que requirieron de un gran esfuerzo tanto por parte de los trabajadores como del sector empresario&rdquo;, se&ntilde;al&oacute; el presidente de CAMIMA, Jos&eacute; Luis Ammaturo, al tiempo que destac&oacute; que &ldquo;mantener un di&aacute;logo permanente es lo que permiti&oacute; acordar una cifra que permite mantener el poder adquisitivo de los trabajadores preservando los puestos de trabajo&rdquo;.</span></span></p>

<p style="margin-left:0cm; margin-right:0cm"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">En igual sentido, Ammaturo asegur&oacute; que &ldquo;las pymes, como las mayores generadoras de empleo de todo el pa&iacute;s, est&aacute;n comprometidas con las necesidades tanto de los trabajadores como de los empresarios y hacen un esfuerzo permanente por alcanzar acuerdos a trav&eacute;s del di&aacute;logo&rdquo;.</span></span></p>

<p style="margin-left:0cm; margin-right:0cm"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">&ldquo;Los empresarios continuaremos esforz&aacute;ndonos para seguir adelante, manteniendo los niveles de producci&oacute;n y cuidando el empleo&rdquo;, concluy&oacute; el presidente de CAMIMA.&nbsp; </span></span></p>
',
                'breve' => '<p><span style="font-size:11.0pt">El Ministerio de Trabajo, Empleo y Seguridad Social homolog&oacute; hoy el acuerdo salarial 2018, firmado entre la C&aacute;mara de la Peque&ntilde;a y Mediana Industria Metal&uacute;rgica (CAMIMA), junto a otras c&aacute;maras del sector, y la Uni&oacute;n Obrera Metal&uacute;rgica (UOM), que estipula un aumento del 15,5 por ciento en dos tramos acumulativos: el primero del 9 por ciento retroactivo a abril pasado y otro de 6 por ciento, en julio pr&oacute;ximo. Adem&aacute;s, establece una cl&aacute;usula de revisi&oacute;n en diciembre de este a&ntilde;o.</span></p>
',
                    'ruta' => 'imgnoticia_63.jpg?34',
                    'habilitado' => 1,
                    'portada' => 0,
                    'orden' => '',
                    'pdf' => '',
                    'otros' => NULL,
                    'image' => NULL,
                    'category_id' => 2,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                34 => 
                array (
                    'id' => 64,
                    'titulo' => 'CAMIMA destaca anuncios oficiales para el sector pyme',
                'descripcion' => '<p style="margin-left:0cm; margin-right:0cm"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">El presidente de la C&aacute;mara de la Peque&ntilde;a y Mediana Industria Metal&uacute;rgica Argentina (CAMIMA), Jos&eacute; Luis Ammaturo, destac&oacute; hoy los anuncios del presidente Mauricio Macri respecto de una reforma de la Ley Pyme para fomentar la producci&oacute;n nacional, al se&ntilde;alar que &ldquo;es fundamental que se apuntale al sector de la peque&ntilde;a y mediana empresa, motor del pa&iacute;s y principal generador de empleo&rdquo;.</span></span></p>

<p style="margin-left:0cm; margin-right:0cm"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">&ldquo;El sector metal&uacute;rgico no es homog&eacute;neo; hay pymes que est&aacute;n atravesando una situaci&oacute;n complicada, por la contracci&oacute;n del mercado interno, la suba de tarifas, la ca&iacute;da de ventas y la suba del d&oacute;lar, entre otras variables, pero tambi&eacute;n hay empresas que han crecido fuertemente en estos &uacute;ltimos dos a&ntilde;os&rdquo;, se&ntilde;al&oacute; Ammaturo. En este contexto, el titular de CAMIMA confi&oacute; en que &ldquo;las medidas que se han ido anunciando en esto d&iacute;as apunten a solucionar los problemas que deben ser atendidos con mayor urgencia&rdquo;.</span></span></p>

<p style="margin-left:0cm; margin-right:0cm"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">&ldquo;Sabemos que la situaci&oacute;n del pa&iacute;s y del mundo es complicada, pero la Argentina precisaba ordenar su macroeconom&iacute;a para atravesar con mayor fortaleza esas turbulencias&rdquo;, consider&oacute; Ammaturo y agreg&oacute;: &ldquo;Confiamos en que se van a ir implementando las herramientas que fomenten la producci&oacute;n nacional y un escenario previsible para incentivar las inversiones&rdquo;.</span></span></p>

<p style="margin-left:0cm; margin-right:0cm"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">En igual sentido, el presidente de CAMIMA destac&oacute; que el nuevo ministro de Producci&oacute;n, Dante Sica, haya anunciado un mayor fomento a las exportaciones. &ldquo;La Argentina no puede ni debe ser un pa&iacute;s cerrado, debemos abrirnos al mundo y en eso las pymes tenemos un enorme potencial, si desde las pol&iacute;ticas de Gobierno se apuntalan las ventas externas&rdquo;, asever&oacute;.</span></span></p>

<p style="margin-left:0cm; margin-right:0cm"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">Respecto de la reforma tributaria, Ammaturo advirti&oacute; que &ldquo;es un reclamo del sector pyme de al menos la &uacute;ltima d&eacute;cada, en donde las cargas impositivas han ido pesando cada vez m&aacute;s a la hora de tomar decisiones de inversi&oacute;n en la Argentina&rdquo;. &ldquo;Las peque&ntilde;as y medianas empresas generamos m&aacute;s del 70 por ciento del empleo en el pa&iacute;s, por eso es tan importante que un Gobierno las reconozca como actor preponderante de la econom&iacute;a y, a trav&eacute;s del di&aacute;logo permanente, encare reformas que favorezcan la generaci&oacute;n de empleo genuino, fomentando la producci&oacute;n local y las exportaciones&rdquo;, concluy&oacute; el titular de CAMIMA.</span></span></p>
',
                'breve' => '<p style="margin-left:0cm; margin-right:0cm"><span style="font-size:16px"><span style="font-family:Calibri,sans-serif">El presidente de la C&aacute;mara de la Peque&ntilde;a y Mediana Industria Metal&uacute;rgica Argentina (CAMIMA), Jos&eacute; Luis Ammaturo, destac&oacute; hoy los anuncios del presidente Mauricio Macri respecto de una reforma de la Ley Pyme para fomentar la producci&oacute;n nacional, al se&ntilde;alar que &ldquo;es fundamental que se apuntale al sector de la peque&ntilde;a y mediana empresa, motor del pa&iacute;s y principal generador de empleo&rdquo;.</span></span></p>
',
                    'ruta' => 'imgnoticia_64.jpg?32',
                    'habilitado' => 1,
                    'portada' => 1,
                    'orden' => '',
                    'pdf' => '',
                    'otros' => NULL,
                    'image' => NULL,
                    'category_id' => 1,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                35 => 
                array (
                    'id' => 65,
                    'titulo' => 'Industria Naval: La UIPBA alerta por efectos negativos ante la posibilidad de desgravar la importación de buques nuevos y usados',
                    'descripcion' => '<p><span style="font-size:14px"><span style="font-family:Verdana,Geneva,sans-serif">Compartimos una nota publicada por la UIPBA en referencia con&nbsp;la aplicaci&oacute;n del decreto 650/2018 que reglamenta la Ley N&deg; 27.419, denominada &ldquo;Desarrollo de la Marina Mercante Nacional y la Integraci&oacute;n Fluvial Regional&rdquo;. CAMIMA particip&oacute; del encuentro, representada por Pablo Reale.</span></span></p>

<p style="margin-left:0cm; margin-right:0cm"><strong><span style="font-size:14px"><span style="font-family:Verdana,Geneva,sans-serif">Industria Naval: La UIPBA alerta por efectos negativos ante la posibilidad de desgravar la importaci&oacute;n de buques nuevos y usados</span></span></strong></p>

<p style="margin-left:0cm; margin-right:0cm"><span style="font-size:14px"><span style="font-family:Verdana,Geneva,sans-serif">La UIPBA alerta sobre las consecuencias negativas en el sector manufacturero naval y en toda su cadena productiva de pymes.</span></span></p>

<p style="margin-left:0cm; margin-right:0cm"><span style="font-size:14px"><span style="font-family:Verdana,Geneva,sans-serif">Este reclamos se hizo ante los efectos nocivos para la actividad que generar&aacute; la aplicaci&oacute;n del decreto 650/2018 que reglamenta la Ley N&deg; 27.419, denominada &ldquo;Desarrollo de la Marina Mercante Nacional y la Integraci&oacute;n Fluvial Regional&rdquo;.</span></span></p>

<p style="margin-left:0cm; margin-right:0cm"><span style="font-size:14px"><span style="font-family:Verdana,Geneva,sans-serif">Con el objetivo de facilitar la incorporaci&oacute;n de buques a la flota mercante argentina, la iniciativa establecer&aacute; un arancel de importaci&oacute;n cero para los buques nuevos, principalmente, y usados. De aplicarse dicha medida, no contemplar&iacute;a la situaci&oacute;n actual que atraviesa nuestra industria naval, y dejar&iacute;a de lado la capacidad vigente que tiene el sector local para dise&ntilde;ar y construir estas mismas embarcaciones.</span></span></p>

<p style="margin-left:0cm; margin-right:0cm"><span style="font-size:14px"><span style="font-family:Verdana,Geneva,sans-serif">Con antecedentes similares en otras d&eacute;cadas del pa&iacute;s, los resultados se dirigen al mismo destino: el cierre de astilleros y talleres navales, la desinversi&oacute;n, la destrucci&oacute;n de la cadena de proveedores, la p&eacute;rdida de recursos humanos calificados formados tras a&ntilde;os de inversi&oacute;n p&uacute;blica y privada, y el deterioro de infraestructuras, de equipos y de herramientas.</span></span></p>

<p style="margin-left:0cm; margin-right:0cm"><span style="font-size:14px"><span style="font-family:Verdana,Geneva,sans-serif">La industria naval argentina, tanto privada como p&uacute;blica, tanto liviana como pesada, tiene su principal n&uacute;cleo de producci&oacute;n y servicios, estudios e investigaci&oacute;n, en la Provincia de Buenos Aires. Su cadena de valor incluye diversas econom&iacute;as regionales y se interrelaciona directamente con las actividades log&iacute;sticas, portuarias, fluviales y mar&iacute;timas.</span></span></p>

<p style="margin-left:0cm; margin-right:0cm"><span style="font-size:14px"><span style="font-family:Verdana,Geneva,sans-serif">Los principales actores de este sector realizaron sus m&aacute;ximos esfuerzos a fin de lograr los mejores consensos y as&iacute; aportar tanto a la calidad normativa como a un resultado efectivo para el pa&iacute;s. Sin embargo, las alternativas legislativas de Marina Mercante e Industria Naval -que estar&iacute;a al salir-, demuestran todo lo contrario. La competitividad que se le exige a las industrias nacionales demanda de leyes acordes a la competitividad internacional general y espec&iacute;fica que existe para este sector industrial.</span></span></p>

<p style="margin-left:0cm; margin-right:0cm"><span style="font-size:14px"><span style="font-family:Verdana,Geneva,sans-serif">Por este motivo, desde la UIPBA realizamos un llamado a los poderes ejecutivos y legislativos, tanto nacionales como bonaerenses, para asumir decisiones que, di&aacute;logo mediante, impacten de manera positiva a nuestros sectores industriales estrat&eacute;gicos, como el naval, y la generaci&oacute;n de empleo privado.</span></span></p>

<p style="margin-left:0cm; margin-right:0cm"><span style="font-size:14px"><span style="font-family:Verdana,Geneva,sans-serif">Para leer la nota en el sitio web <a href="http://www.uipba.org.ar/novedades-uipba/industria-naval-la-uipba-alerta-por-efectos-negativos-ante-la-posibilidad-de-desgravar-la-importacion-de-buques-nuevos-y-usados/">click aqu&iacute;</a></span></span></p>
',
                    'breve' => '<p><span style="font-size:14px"><span style="font-family:Verdana,Geneva,sans-serif">Compartimos una nota publicada por la UIPBA en referencia con&nbsp;la aplicaci&oacute;n del decreto 650/2018 que reglamenta la Ley N&deg; 27.419, denominada &ldquo;Desarrollo de la Marina Mercante Nacional y la Integraci&oacute;n Fluvial Regional&rdquo;. CAMIMA particip&oacute; del encuentro, representada por Pablo Reale.</span></span></p>
',
                    'ruta' => 'ofertas_65.jpg?61',
                    'habilitado' => 1,
                    'portada' => 0,
                    'orden' => '',
                    'pdf' => '',
                    'otros' => NULL,
                    'image' => NULL,
                    'category_id' => 3,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                36 => 
                array (
                    'id' => 66,
                    'titulo' => 'CAMIMA sobre la reunión de la UIA con Dante Sica',
                'descripcion' => '<p style="margin-left:0cm; margin-right:0cm"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">En el marco de la reuni&oacute;n del nuevo ministro de Producci&oacute;n, Dante Sica, con directivos de la Uni&oacute;n Industrial Argentina (UIA), CAMIMA expresa expectativa positiva por esta nueva gesti&oacute;n ministerial y coincide en la urgencia de trabajar sobre distintos temas que hacen a la industria.</span></span></p>

<p style="margin-left:0cm; margin-right:0cm"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">Tomando en consideraci&oacute;n las declaraciones de la UIA y del Ministerio respecto de los temas tratados en la reuni&oacute;n, CAMIMA se&ntilde;ala que se debe trabajar en distintos ejes centrales. Por un lado, sobre la limitaci&oacute;n de importaciones de aquellos productos que se fabrican en el pa&iacute;s y de art&iacute;culos suntuosos, y por otro lado crear nuevas opciones de cr&eacute;dito para reconstituir el capital de trabajo.</span></span></p>

<p style="margin-left:0cm; margin-right:0cm"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">Otro de los ejes sobre los que consideramos que es necesario trabajar es el fortalecimiento del mercado interno, a trav&eacute;s de distintas herramientas de est&iacute;mulo. </span></span></p>

<p style="margin-left:0cm; margin-right:0cm"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">En cuanto a los temas que se trataron en el encuentro, coincidimos en que resulta fundamental avanzar en la concreci&oacute;n de las mesas sectoriales, con la presencia de todos los actores involucrados; la reforma tributaria y de la Ley Pyme, y la mejora en la implementaci&oacute;n del Compre Nacional.</span></span></p>

<p style="margin-left:0cm; margin-right:0cm"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">Como objetivo a largo plazo, consideramos que se debe trabajar sobre la matriz productiva apuntando a la exportaci&oacute;n de productos de alto valor agregado.</span></span></p>
',
                'breve' => '<p style="margin-left:0cm; margin-right:0cm"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">En el marco de la reuni&oacute;n del nuevo ministro de Producci&oacute;n, Dante Sica, con directivos de la Uni&oacute;n Industrial Argentina (UIA), CAMIMA expresa expectativa positiva por esta nueva gesti&oacute;n ministerial y coincide en la urgencia de trabajar sobre distintos temas que hacen a la industria.</span></span></p>
',
                    'ruta' => 'imgnoticia_66.jpg?74',
                    'habilitado' => 1,
                    'portada' => 0,
                    'orden' => '',
                    'pdf' => '',
                    'otros' => NULL,
                    'image' => NULL,
                    'category_id' => 3,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                37 => 
                array (
                    'id' => 67,
                    'titulo' => 'Revista CAMIMA',
                    'descripcion' => '<p><span style="font-size:14px"><span style="font-family:Verdana,Geneva,sans-serif">Ya se puede descargar una nueva edici&oacute;n de la revista CAMIMA.</span></span></p>

<p>&nbsp;</p>
',
                    'breve' => '<p><span style="font-size:14px"><span style="font-family:Verdana,Geneva,sans-serif">Ya se puede descargar una nueva edici&oacute;n de la revista CAMIMA.</span></span></p>
',
                    'ruta' => 'imgnoticia_67.png?66',
                    'habilitado' => 1,
                    'portada' => 1,
                    'orden' => '',
                    'pdf' => 'Revista CAMIMA 2018.pdf?94',
                    'otros' => NULL,
                    'image' => NULL,
                    'category_id' => 3,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                38 => 
                array (
                    'id' => 68,
                    'titulo' => 'CAMIMA sobre la reunión de la UIA con Dante Sica',
                'descripcion' => '<p style="margin-left:0cm; margin-right:0cm"><span style="font-size:12pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="font-size:11.0pt"><span style="font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;">En el marco de la reuni&oacute;n del nuevo ministro de Producci&oacute;n, Dante Sica, con directivos de la Uni&oacute;n Industrial Argentina (UIA), CAMIMA expresa expectativa positiva por esta nueva gesti&oacute;n ministerial y coincide en la urgencia de trabajar sobre distintos temas que hacen a la industria.</span></span></span></span></p>

<p style="margin-left:0cm; margin-right:0cm"><span style="font-size:12pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="font-size:11.0pt"><span style="font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;">Tomando en consideraci&oacute;n las declaraciones de la UIA y del Ministerio respecto de los temas tratados en la reuni&oacute;n, CAMIMA se&ntilde;ala que se debe trabajar en distintos ejes centrales. Por un lado, sobre la limitaci&oacute;n de importaciones de aquellos productos que se fabrican en el pa&iacute;s y de art&iacute;culos suntuosos, y por otro lado crear nuevas opciones de cr&eacute;dito para reconstituir el capital de trabajo.</span></span></span></span></p>

<p style="margin-left:0cm; margin-right:0cm"><span style="font-size:12pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="font-size:11.0pt"><span style="font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;">Otro de los ejes sobre los que consideramos que es necesario trabajar es el fortalecimiento del mercado interno, a trav&eacute;s de distintas herramientas de est&iacute;mulo. </span></span></span></span></p>

<p style="margin-left:0cm; margin-right:0cm"><span style="font-size:12pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="font-size:11.0pt"><span style="font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;">En cuanto a los temas que se trataron en el encuentro, coincidimos en que resulta fundamental avanzar en la concreci&oacute;n de las mesas sectoriales, con la presencia de todos los actores involucrados; la reforma tributaria y de la Ley Pyme, y la mejora en la implementaci&oacute;n del Compre Nacional.</span></span></span></span></p>

<p style="margin-left:0cm; margin-right:0cm"><span style="font-size:12pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="font-size:11.0pt"><span style="font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;">Como objetivo a largo plazo, consideramos que se debe trabajar sobre la matriz productiva apuntando a la exportaci&oacute;n de productos de alto valor agregado.</span></span></span></span></p>
',
                'breve' => '<p style="margin-left:0cm; margin-right:0cm"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">En el marco de la reuni&oacute;n del nuevo ministro de Producci&oacute;n, Dante Sica, con directivos de la Uni&oacute;n Industrial Argentina (UIA), CAMIMA expresa expectativa positiva por esta nueva gesti&oacute;n ministerial y coincide en la urgencia de trabajar sobre distintos temas que hacen a la industria.</span></span></p>
',
                    'ruta' => 'imgnoticia_68.jpg?82',
                    'habilitado' => 1,
                    'portada' => 1,
                    'orden' => '',
                    'pdf' => '',
                    'otros' => NULL,
                    'image' => NULL,
                    'category_id' => 3,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                39 => 
                array (
                    'id' => 69,
                    'titulo' => 'Preocupación de pymes metalúrgicas por rebaja de reintegros a la exportación: CAMIMA pidió que se revea la medida',
                'descripcion' => '<p style="margin-left:0cm; margin-right:0cm"><span style="font-size:14px"><span style="font-family:Verdana,Geneva,sans-serif">El presidente de la C&aacute;mara de la Peque&ntilde;a y Mediana Industria Metal&uacute;rgica Argentina (CAMIMA), Jos&eacute; Luis Ammaturo, se&ntilde;al&oacute; hoy que &ldquo;hay gran preocupaci&oacute;n entre las pymes metal&uacute;rgicas por la decisi&oacute;n de reducir los reintegros a la exportaci&oacute;n&rdquo; y advirti&oacute; que &ldquo;el pa&iacute;s necesita d&oacute;lares y la exportaci&oacute;n de productos industriales es la mejor forma para el ingreso de divisas, adem&aacute;s de un gran fomento a la producci&oacute;n local&rdquo;.</span></span></p>

<p style="margin-left:0cm; margin-right:0cm"><span style="font-size:14px"><span style="font-family:Verdana,Geneva,sans-serif">&ldquo;La industria metal&uacute;rgica atraviesa un momento de baja en la actividad y la reducci&oacute;n de los reintegros a la exportaci&oacute;n puede empeorar esta situaci&oacute;n&rdquo;, advirti&oacute; Ammaturo y se&ntilde;al&oacute; que &ldquo;m&aacute;s que nunca las pymes necesitan un apoyo muy fuerte para la exportaci&oacute;n de productos industrializados&rdquo;.</span></span></p>

<p style="margin-left:0cm; margin-right:0cm"><span style="font-size:14px"><span style="font-family:Verdana,Geneva,sans-serif">En este contexto, el titular de CAMIMA pidi&oacute; que &ldquo;se revea la medida hoy anunciada y que se creen herramientas que, por el contrario, refuercen las exportaciones&rdquo;.</span></span></p>

<p style="margin-left:0cm; margin-right:0cm"><span style="font-size:14px"><span style="font-family:Verdana,Geneva,sans-serif">&ldquo;El reintegro a las exportaciones es una medida que alienta la venta de productos nacionales en mercados externos y, si se mantiene la decisi&oacute;n de reducirlo se desalentar&aacute; la actividad exportadora, al tiempo que se perjudicar&aacute; la competitividad con otros pa&iacute;ses con los que ya es complejo emparejar las condiciones de venta&rdquo;, manifest&oacute; Ammaturo.</span></span></p>

<p style="margin-left:0cm; margin-right:0cm"><span style="font-size:14px"><span style="font-family:Verdana,Geneva,sans-serif">En igual sentido, el presidente de CAMIMA confi&oacute; en que &ldquo;el Gobierno atender&aacute; este pedido de la industria, dando marcha atr&aacute;s con esta decisi&oacute;n que perjudica enormemente al sector productivo, desalienta las exportaciones y crea inseguridad jur&iacute;dica&rdquo;.</span></span></p>
',
                'breve' => '<p style="margin-left:0cm; margin-right:0cm"><span style="font-size:14px"><span style="font-family:Verdana,Geneva,sans-serif">El presidente de la C&aacute;mara de la Peque&ntilde;a y Mediana Industria Metal&uacute;rgica Argentina (CAMIMA), Jos&eacute; Luis Ammaturo, se&ntilde;al&oacute; hoy que &ldquo;hay gran preocupaci&oacute;n entre las pymes metal&uacute;rgicas por la decisi&oacute;n de reducir los reintegros a la exportaci&oacute;n&rdquo; y advirti&oacute; que &ldquo;el pa&iacute;s necesita d&oacute;lares y la exportaci&oacute;n de productos industriales es la mejor forma para el ingreso de divisas, adem&aacute;s de un gran fomento a la producci&oacute;n local&rdquo;.</span></span></p>
',
                    'ruta' => 'imgnoticia_69.jpg?38',
                    'habilitado' => 1,
                    'portada' => 1,
                    'orden' => '',
                    'pdf' => '',
                    'otros' => NULL,
                    'image' => NULL,
                    'category_id' => 1,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                40 => 
                array (
                    'id' => 70,
                    'titulo' => 'CAMIMA participó del encuentro con el Ministro de Producción, en CGERA',
                'descripcion' => '<p style="margin-left:0cm; margin-right:0cm"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">El presidente de la C&aacute;mara de la Peque&ntilde;a y Mediana Industria Metal&uacute;rgica Argentina (CAMIMA), Jos&eacute; Luis Ammaturo, y el secretario de la entidad, Aldo Lo Russo, participaron del encuentro con el ministro de Producci&oacute;n, Dante Sica, en la sede de la Confederaci&oacute;n General Empresaria de la Rep&uacute;blica Argentina (CGERA), a quien presentaron una serie de propuestas para mejorar la situaci&oacute;n del sector.</span></span></p>

<p style="margin-left:0cm; margin-right:0cm"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">En el encuentro, Sica dialog&oacute; con los representantes de m&aacute;s de 30 c&aacute;maras empresarias pymes nucleadas en la CGERA que participaron del encuentro, y escuch&oacute; una serie de consultas y pedidos de los distintos sectores productivos.</span></span></p>

<p style="margin-left:0cm; margin-right:0cm"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">Tambi&eacute;n durante la reuni&oacute;n se plantearon cuestiones ligadas con la actual situaci&oacute;n financiera de las pymes y, Sica, present&oacute; algunas medidas que impulsa el Ministerio en b&uacute;squeda de &ldquo;cuidar la fluidez de la cadena de pagos&rdquo;, seg&uacute;n asegur&oacute; el funcionario.</span></span></p>

<p style="margin-left:0cm; margin-right:0cm"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">Acompa&ntilde;aron al ministro de Producci&oacute;n los secretarios de Emprendedores y Pymes, Mariano Mayer, y de Industria, Fernando Grasso.</span></span></p>
',
                'breve' => '<p style="margin-left:0cm; margin-right:0cm"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">El presidente de la C&aacute;mara de la Peque&ntilde;a y Mediana Industria Metal&uacute;rgica Argentina (CAMIMA), Jos&eacute; Luis Ammaturo, y el secretario de la entidad, Aldo Lo Russo, participaron del encuentro con el ministro de Producci&oacute;n, Dante Sica, en la sede de la Confederaci&oacute;n General Empresaria de la Rep&uacute;blica Argentina (CGERA), a quien presentaron una serie de propuestas para mejorar la situaci&oacute;n del sector.</span></span></p>
',
                    'ruta' => 'imgnoticia_70.jpg?99',
                    'habilitado' => 1,
                    'portada' => 1,
                    'orden' => '',
                    'pdf' => '',
                    'otros' => NULL,
                    'image' => NULL,
                    'category_id' => 3,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                41 => 
                array (
                    'id' => 71,
                    'titulo' => 'CAMIMA firmó acuerdo con la UOM por un incremento adicional del 5% para 2018',
                'descripcion' => '<p style="margin-left:0cm; margin-right:0cm"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">La C&aacute;mara de la Peque&ntilde;a y Mediana Industria Metal&uacute;rgica (CAMIMA), junto a otras c&aacute;maras del sector, y la Uni&oacute;n Obrera Metal&uacute;rgica (UOM), firmaron hoy un acuerdo que estipula un aumento adicional del 5 por ciento sobre el salario b&aacute;sico de convenio, en el marco de la aplicaci&oacute;n del decreto 508/2018. Los trabajadores comenzar&aacute;n a percibir este incremento con los salarios de septiembre. Este porcentaje se suma al 15,5 por ciento otorgado en mayo pasado que se pag&oacute; en dos tramos acumulativos: el primero del 9 por ciento en abril pasado y el otro de 6 por ciento, en julio.</span></span></p>

<p style="margin-left:0cm; margin-right:0cm"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">&ldquo;El acuerdo se alcanz&oacute; en el marco de nuevas negociaciones que se realizaron a partir del decreto 508, que requirieron de un gran esfuerzo tanto por parte de los trabajadores como del sector empresario&rdquo;, se&ntilde;al&oacute; el presidente de CAMIMA, Jos&eacute; Luis Ammaturo. &ldquo;Hemos mantenido nuevas reuniones con la UOM para evaluar las posibilidades de otorgar este incremento y abordar distintas cuestiones del sector. En este marco, hemos alcanzado el acuerdo que, entendemos, atiende a mejorar el ingreso de los trabajadores&rdquo;.</span></span></p>

<p style="margin-left:0cm; margin-right:0cm"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">En igual sentido, Ammaturo asegur&oacute; que &ldquo;las pymes, como las mayores generadoras de empleo de todo el pa&iacute;s, est&aacute;n comprometidas con las necesidades tanto de los trabajadores como de los empresarios y hacen un esfuerzo permanente por alcanzar acuerdos a trav&eacute;s del di&aacute;logo&rdquo;.</span></span></p>

<p style="margin-left:0cm; margin-right:0cm"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">&ldquo;Sabemos que el pa&iacute;s atraviesa un momento dif&iacute;cil y desde el sector empresario estamos haciendo todos los esfuerzos para mantener la actividad hasta que se logre estabilizar la situaci&oacute;n&rdquo;, concluy&oacute; el presidente de CAMIMA.</span></span></p>
',
                'breve' => '<p style="margin-left:0cm; margin-right:0cm"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">La C&aacute;mara de la Peque&ntilde;a y Mediana Industria Metal&uacute;rgica (CAMIMA), junto a otras c&aacute;maras del sector, y la Uni&oacute;n Obrera Metal&uacute;rgica (UOM), firmaron hoy un acuerdo que estipula un aumento adicional del 5 por ciento sobre el salario b&aacute;sico de convenio, en el marco de la aplicaci&oacute;n del decreto 508/2018. Los trabajadores comenzar&aacute;n a percibir este incremento con los salarios de septiembre. Este porcentaje se suma al 15,5 por ciento otorgado en mayo pasado que se pag&oacute; en dos tramos acumulativos: el primero del 9 por ciento en abril pasado y el otro de 6 por ciento, en julio.</span></span></p>
',
                    'ruta' => 'imgnoticia_71.jpg?49',
                    'habilitado' => 1,
                    'portada' => 0,
                    'orden' => '',
                    'pdf' => '',
                    'otros' => NULL,
                    'image' => NULL,
                    'category_id' => 1,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                42 => 
                array (
                    'id' => 72,
                    'titulo' => 'Seminario laboral en CAMIMA',
                'descripcion' => '<p><span style="font-family:Arial,Helvetica,sans-serif"><span style="font-size:14px">La C&aacute;mara de la Peque&ntilde;a y Mediana Industria Metal&uacute;rgica Argentina (CAMIMA) organiz&oacute; un seminario laboral, a cargo del asesor de la c&aacute;mara en asuntos legales y laborales, Dr. Gustavo Kechichian.</span></span></p>

<p><span style="font-family:Arial,Helvetica,sans-serif"><span style="font-size:14px">Durante el encuentro&nbsp;-sin cargo para los asociados-&nbsp;se trataron temas de inter&eacute;s sobre distintos aspectos del &aacute;mbito laboral que preocupan y ocupan a los empresarios pymes y los directivos de sus empresas.</span></span></p>
',
                'breve' => '<p><span style="font-family:Arial,Helvetica,sans-serif"><span style="font-size:14px">La C&aacute;mara de la Peque&ntilde;a y Mediana Industria Metal&uacute;rgica Argentina (CAMIMA) organiz&oacute; un seminario laboral, a cargo del asesor de la c&aacute;mara en asuntos legales y laborales, Dr. Gustavo Kechichian.</span></span></p>

<p><span style="font-family:Arial,Helvetica,sans-serif"><span style="font-size:14px">Durante el encuentro&nbsp;-sin cargo para los asociados-&nbsp;se trataron temas de inter&eacute;s sobre distintos aspectos del &aacute;mbito laboral que preocupan y ocupan a los empresarios pymes y los directivos de sus empresas.</span></span></p>
',
                    'ruta' => 'ofertas_72.jpg?76',
                    'habilitado' => 1,
                    'portada' => 1,
                    'orden' => '',
                    'pdf' => '',
                    'otros' => NULL,
                    'image' => NULL,
                    'category_id' => 3,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                43 => 
                array (
                    'id' => 73,
                    'titulo' => 'El Gobierno redujo los aranceles para importar algunos bienes de capital',
                    'descripcion' => '<p><span style="font-size:14px"><span style="font-family:Arial,Helvetica,sans-serif">Compartimos una nota del portal Infobae.com sobre el decreto 837/18 publicado hoy en el Boletín Oficial, a través del cual el Gobierno reduce los aranceles a la importación de diversos productos que no se fabrican en el país, en más de 100 posiciones arancelarias, con el objetivo de favorecer la inversión productiva e impulsar la compra de cosechadoras, robots y excavadoras.</span></span></p>

<p><span style="font-size:14px"><span style="font-family:Arial,Helvetica,sans-serif">“La ampliación del listado de bienes de capital a más de 300 posiciones arancelarias implica un abaratamiento en la importación de mercaderías que no se producen en la Argentina. Así fomentamos la inversión productiva y la generación de empleo en el país”, dijo el ministro de Producción y Trabajo, Dante Sica.<br />
<br />
Entre los diversos sectores favorecidos están el sector agrícola, al reducir los aranceles a la importación de cosechadoras y de vibradoras para la recolección de olivos, uvas, tomates y frutos secos; el sector metalmecánico, al disminuir los aranceles para centros de mecanizado y robots industriales; y los sectores vial, minero y de la construcción, al bajar los aranceles de excavadoras que giran 360° y plantas de producción.</span></span></p>

<p><span style="font-size:14px"><span style="font-family:Arial,Helvetica,sans-serif">También se abarata la importación de bienes de capital utilizados por la industria láctea, papelera, puertos, turismo en centros de esquí y curtiembres.<br />
<br />
A través del decreto publicado, se modifica el tratamiento en la Argentina a las importaciones, al agregar más de 100 posiciones arancelarias, y reducir la alícuota en un 12% para 322 posiciones y un 10% para las 4 restantes que componen el listado.</span></span></p>

<p><span style="font-size:14px"><span style="font-family:Arial,Helvetica,sans-serif">Esta medida impacta en un mayor universo de mercaderías ya que cada posición arancelaria puede corresponder a distintos productos. El listado de bienes de capital surge de un estudio realizado por la Secretaría de Comercio del Ministerio de Producción y Trabajo de la Nación.</span></span></p>

<p><span style="font-size:14px"><span style="font-family:Arial,Helvetica,sans-serif">Leer la nota en el sitio web haciendo <a href="https://www.iprofesional.com/economia/278326-empleo-industria-importaci%C3%B3n-Por-decreto-el-Gobierno-redujo-los-aranceles-para-importar-maquinaria">click aquí</a></span></span></p>
',
                    'breve' => '<p><span style="font-size:14px"><span style="font-family:Arial,Helvetica,sans-serif">Compartimos una nota del portal Infobae.com sobre el decreto 837/18 publicado hoy en el Boletín Oficial, a través del cual el Gobierno reduce los aranceles a la importación de diversos productos que no se fabrican en el país, en más de 100 posiciones arancelarias, con el objetivo de favorecer la inversión productiva e impulsar la compra de cosechadoras, robots y excavadoras.</span></span></p>
',
                    'ruta' => 'imgnoticia_73.jpg?33',
                    'habilitado' => 1,
                    'portada' => 0,
                    'orden' => '',
                    'pdf' => '',
                    'otros' => NULL,
                    'image' => NULL,
                    'category_id' => 3,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                44 => 
                array (
                    'id' => 74,
                    'titulo' => 'Acuerdo con ASIMRA por un incremento adicional del 5% para este año',
                'descripcion' => '<p style="margin-left:0cm; margin-right:0cm"><span style="font-size:14px"><span style="font-family:Arial,Helvetica,sans-serif">La Cámara de la Pequeña y Mediana Industria Metalúrgica Argentina (CAMIMA), junto a las otras cámaras empresarias del sector, acordó con la Asociación de Supervisores de la Industria Metalmecánica de la República Argentina (ASIMRA), un incremento del 5 por ciento a partir de los sueldos de septiembre; que se suma al 15 por ciento acordado en mayo pasado en el marco de las paritarias 2018.</span></span></p>

<p style="margin-left:0cm; margin-right:0cm"><span style="font-size:14px"><span style="font-family:Arial,Helvetica,sans-serif">El convenio de mayo pasado establecía que el 15 por ciento de incremento se pagara en dos cuotas no acumulativas; la primera del 10 por ciento retroactiva a mayo y otra del 5 por ciento en septiembre. Además, se había acordado el pago de un bono de 4700 pesos remunerativos en dos cuotas de 2350 pesos cada una, en enero y marzo de 2019. Este nuevo acuerdo deja sin efecto esas sumas remunerativas e incorpora a los salarios, a partir de los sueldos de septiembre, 392 pesos adicionales. Sobre el importe resultante, se aplica el incremento del 5 por ciento acordado en el marco del decreto 508/2018.</span></span></p>

<p style="margin-left:0cm; margin-right:0cm"><span style="font-size:14px"><span style="font-family:Arial,Helvetica,sans-serif">“Como siempre lo hemos hecho, mantenemos un permanente diálogo con los trabajadores y entendemos las necesidades de actualización para no perder poder adquisitivo del salario. Por eso, hemos considerado otorgar el aumento adicional que habilita el decreto 508, alcanzando este nuevo acuerdo sin conflictos”, destacó el presidente de CAMIMA, José Luis Ammaturo.</span></span></p>

<p style="margin-left:0cm; margin-right:0cm"><span style="font-size:14px"><span style="font-family:Arial,Helvetica,sans-serif">Ammaturo señaló también que el aumento acordado “atiende las necesidades de los trabajadores, sin afectar la actividad productiva y dentro de las pautas que permiten hacer previsible la economía del país”.</span></span></p>
',
                'breve' => '<p><span style="font-size:14px"><span style="font-family:Arial,Helvetica,sans-serif">La Cámara de la Pequeña y Mediana Industria Metalúrgica Argentina (CAMIMA), junto a las otras cámaras empresarias del sector, acordó con la Asociación de Supervisores de la Industria Metalmecánica de la República Argentina (ASIMRA), un incremento del 5 por ciento a partir de los sueldos de septiembre; que se suma al 15 por ciento acordado en mayo pasado en el marco de las paritarias 2018.</span></span></p>
',
                    'ruta' => 'imgnoticia_74.jpg?25',
                    'habilitado' => 1,
                    'portada' => 0,
                    'orden' => '',
                    'pdf' => '',
                    'otros' => NULL,
                    'image' => NULL,
                    'category_id' => 3,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                45 => 
                array (
                    'id' => 75,
                    'titulo' => 'CAMIMA participó de una reunión con el ministro de Producción bonaerense',
                'descripcion' => '<p style="margin-left:0cm; margin-right:0cm"><span style="font-size:16px"><span style="font-family:Calibri,sans-serif">El presidente de la C&aacute;mara de la Peque&ntilde;a y Mediana Industria Metal&uacute;rgica Argentina (CAMIMA), Jos&eacute; Luis Ammaturo, particip&oacute; de una reuni&oacute;n con el ministro de Producci&oacute;n bonaerense, Javier Tizado, organizada por la Confederaci&oacute;n General Empresaria de la Rep&uacute;blica Argentina (CGERA).</span></span></p>

<p style="margin-left:0cm; margin-right:0cm"><span style="font-size:16px"><span style="font-family:Calibri,sans-serif">En el encuentro con el funcionario provincial se abordaron distintos temas y Ammaturo tuvo la oportunidad de poner en conocimiento de Tizado la realidad del sector metal&uacute;rgico.</span></span></p>

<p style="margin-left:0cm; margin-right:0cm"><span style="font-size:16px"><span style="font-family:Calibri,sans-serif">&ldquo;Mantuvimos una cordial y extensa reuni&oacute;n con el ministro y tuvimos la oportunidad de plantear distintos temas que hacen a la industria y especialmente al sector metal&uacute;rgico&rdquo;, destac&oacute; Ammaturo tras el encuentro.</span></span></p>

<p style="margin-left:0cm; margin-right:0cm"><span style="font-size:16px"><span style="font-family:Calibri,sans-serif">Por su parte, el ministro Tizado convers&oacute; con los empresarios sobre la situaci&oacute;n actual del sector pyme bonaerense y repas&oacute; algunas medidas que tom&oacute; el Gobierno de la Provincia para buscar impulsar la industria bonaerense, como la baja impositiva, los programas de exportaciones y las distintas l&iacute;neas de financiamiento del Banco Provincia</span></span></p>

<p style="margin-left:0cm; margin-right:0cm"><span style="font-size:16px"><span style="font-family:Calibri,sans-serif">&quot;Hemos simplificado tr&aacute;mites, la presi&oacute;n impositiva ha bajado y 15.000 millones de pesos fueron al sector productivo. Adem&aacute;s hay una progresi&oacute;n para que los IIBB sigan bajando&rdquo;, se&ntilde;al&oacute; el funcionario y asegur&oacute;: &ldquo;Nosotros somos los interlocutores de las pymes y siempre trabajamos para poder potenciarlas&rdquo;. &ldquo;Desde el inicio estuvimos cerca de ellas y lo seguiremos estando&quot;, sostuvo Tizado.</span></span></p>

<p style="margin-left:0cm; margin-right:0cm"><span style="font-size:16px"><span style="font-family:Calibri,sans-serif">Por su parte, el titular de la CGERA, Marcelo Fern&aacute;ndez, se&ntilde;al&oacute; a la prensa que &ldquo;estas mesas son para sumar, buscar soluciones y conformar una agenda provincial de temas&rdquo;. &ldquo;Queremos que el Ministerio sea un canal de di&aacute;logo a nivel nacional y que cuente con nosotros para este tipo de encuentros con los empresarios de la provincia&rdquo;, remarc&oacute;.</span></span></p>
',
                'breve' => '<p style="margin-left:0cm; margin-right:0cm"><span style="font-size:16px"><span style="font-family:Calibri,sans-serif">El presidente de la C&aacute;mara de la Peque&ntilde;a y Mediana Industria Metal&uacute;rgica Argentina (CAMIMA), Jos&eacute; Luis Ammaturo, particip&oacute; de una reuni&oacute;n con el ministro de Producci&oacute;n bonaerense, Javier Tizado, organizada por la Confederaci&oacute;n General Empresaria de la Rep&uacute;blica Argentina (CGERA).</span></span></p>

<p style="margin-left:0cm; margin-right:0cm"><span style="font-size:16px"><span style="font-family:Calibri,sans-serif">En el encuentro con el funcionario provincial se abordaron distintos temas y Ammaturo tuvo la oportunidad de poner en conocimiento de Tizado la realidad del sector metal&uacute;rgico.</span></span></p>
',
                    'ruta' => 'ofertas_75.jpg?59',
                    'habilitado' => 1,
                    'portada' => 1,
                    'orden' => '',
                    'pdf' => '',
                    'otros' => NULL,
                    'image' => NULL,
                    'category_id' => 3,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                46 => 
                array (
                    'id' => 76,
                    'titulo' => 'CAMIMA participó de la presentación de un modelo de protocolo de prevención de la violencia laboral',
                    'descripcion' => '<p style="margin-left:0cm; margin-right:0cm"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="color:black">La vicepresidenta 2&deg; de CAMIMA, Roxana Petrecca, particip&oacute;&nbsp;-en representaci&oacute;n de la c&aacute;mara- de la presentaci&oacute;n de un modelo de &ldquo;Protocolo para la prevenci&oacute;n de violencia laboral en organizaciones empresariales&rdquo;, organizada por la Oficina de Asesoramiento sobre Violencia Laboral, cuya coordinaci&oacute;n est&aacute; a cargo de la Dra. Patricia Saenz.</span></span></span></p>

<p style="margin-left:0cm; margin-right:0cm"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="color:black">Luego de la firma del Acta Compromiso y el lanzamiento del Manual de Concientizaci&oacute;n y Prevenci&oacute;n sobre Violencia Laboral en las Organizaciones Empresariales, se retoman estas reuniones cuya finalidad es brindar asesoramiento para que, mediante buenas pr&aacute;cticas, lograr un buen clima laboral, lo cual concluye en un mejor rendimiento del trabajador, fortaleciendo a la vez la producci&oacute;n de las empresas.</span></span></span></p>

<p style="margin-left:0cm; margin-right:0cm"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="color:black">Participaron representantes de empresas como Telecom, Aysa, Suiss Medical, Banco Naci&oacute;n, Bunge, Mastellone, Grupo Brasil, CAME, C&aacute;mara Argentina de Indumentaria de Beb&eacute;s y Ni&ntilde;os (CAIBYN), entre otras.</span></span></span></p>
',
                    'breve' => '<p style="margin-left:0cm; margin-right:0cm"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="color:black">La vicepresidenta 2&deg; de CAMIMA, Roxana Petrecca, particip&oacute;&nbsp;-en representaci&oacute;n de la c&aacute;mara- de la presentaci&oacute;n de un modelo de &ldquo;Protocolo para la prevenci&oacute;n de violencia laboral en organizaciones empresariales&rdquo;, organizada por la Oficina de Asesoramiento sobre Violencia Laboral, cuya coordinaci&oacute;n est&aacute; a cargo de la Dra. Patricia Saenz.</span></span></span></p>
',
                    'ruta' => 'imgnoticia_76.jpg?77',
                    'habilitado' => 1,
                    'portada' => 0,
                    'orden' => '',
                    'pdf' => '',
                    'otros' => NULL,
                    'image' => NULL,
                    'category_id' => 3,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                47 => 
                array (
                    'id' => 77,
                    'titulo' => 'Beneficios del Certificado Pyme',
                'descripcion' => '<p><span style="font-size:14px"><span style="font-family:Tahoma,Geneva,sans-serif">Compartimos un informe elaborado por el&nbsp;Departamento PyMI y Desarrollo Regional de la Uni&oacute;n Industrial Argentina (UIA), en el que se detallan las iniciativas impulsadas por organismos gubernamentales que otorgan facilidades para quienes cuenten con dicho certificado.</span></span></p>

<p style="margin-left:0cm; margin-right:0cm"><span style="font-size:14px"><span style="font-family:Tahoma,Geneva,sans-serif">El documento resume los beneficios existentes en el marco a la Ley PyME, como tambi&eacute;n los instrumentos asociados a los Planes de Pago para los cuales la AFIP solicita el certificado PyME Vigente. Adem&aacute;s, incluye un detalle de las medidas impulsadas por la Secretar&iacute;a de Emprendedores y PyMEs para promover la formaci&oacute;n de los recursos humanos y la contrataci&oacute;n de expertos para realizar diversas reformas en sus empresas. </span></span></p>

<p style="margin-left:0cm; margin-right:0cm"><span style="font-size:14px"><span style="font-family:Tahoma,Geneva,sans-serif">Por otra parte, el informe contiene el link para acceder a la p&aacute;gina oficial que contiene mayor informaci&oacute;n sobre ese programa. </span></span></p>

<p style="margin-left:0cm; margin-right:0cm"><span style="font-size:14px"><span style="font-family:Tahoma,Geneva,sans-serif">El Ministerio de Producci&oacute;n y Trabajo inform&oacute; que hasta el 18 de septiembre estaban registradas 40 mil empresas industriales PyME con dicho certificado. Desde la UIA se continuar&aacute; trabajando en conjunto con el Ministerio y con las otras dependencias estatales para ampliar los beneficios a las empresas que tengan acceso a dicha documentaci&oacute;n.</span></span></p>

<p style="margin-left:0cm; margin-right:0cm"><span style="font-size:14px"><span style="font-family:Tahoma,Geneva,sans-serif">Para ver la nota en el sitio web de la UIA <a href="https://www.uia.org.ar/pymi-desarrollo-regional/3280/conozca-los-beneficios-del-certificado-pyme-vigente/">click ac&aacute;</a></span></span></p>
',
                'breve' => '<p><span style="font-size:14px"><span style="font-family:Tahoma,Geneva,sans-serif">Compartimos un informe elaborado por el&nbsp;Departamento PyMI y Desarrollo Regional de la Uni&oacute;n Industrial Argentina (UIA), en el que se detallan las iniciativas impulsadas por organismos gubernamentales que otorgan facilidades para quienes cuenten con dicho certificado.</span></span></p>
',
                    'ruta' => 'ofertas_77.jpg?86',
                    'habilitado' => 1,
                    'portada' => 1,
                    'orden' => '',
                    'pdf' => 'Beneficios_Certificado_PyME_1.pdf?74',
                    'otros' => NULL,
                    'image' => NULL,
                    'category_id' => 3,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                48 => 
                array (
                    'id' => 78,
                    'titulo' => 'CAMIMA se reunió con el ministro Sica y fue invitada a participar de la mesa sectorial metalmecánica',
                'descripcion' => '<p style="margin-left:0cm; margin-right:0cm"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">El ministro de Producci&oacute;n y Trabajo, Dante Sica, recibi&oacute; al presidente de la C&aacute;mara de la Peque&ntilde;a y Mediana Industria Metal&uacute;rgica (CAMIMA), Jos&eacute; Luis Ammaturo, quien &ndash;junto a otros directivos de la entidad- plante&oacute; la situaci&oacute;n del sector, los temas que preocupan y las perspectivas a futuro.</span></span></p>

<p style="margin-left:0cm; margin-right:0cm"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">&ldquo;La reuni&oacute;n fue muy positiva, porque pudimos plantear todos las preocupaciones y fortalezas del sector metal&uacute;rgico y recibimos una muy buena predisposici&oacute;n por parte del ministro para atender estas cuestiones&rdquo;, se&ntilde;al&oacute; Ammaturo al finalizar el encuentro.</span></span></p>

<p style="margin-left:0cm; margin-right:0cm"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">Seg&uacute;n indic&oacute; el titular de CAMIMA, el ministro invit&oacute; a la entidad a &ldquo;participar de las mesas sectoriales de la industria metalmec&aacute;nica que se realicen a futuro y de las acciones que emprenda el Ministerio a favor de las pymes industriales&rdquo;.</span></span></p>

<p style="margin-left:0cm; margin-right:0cm"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">&ldquo;Para las pymes metal&uacute;rgicas &ndash;sector fundamental de la actividad productiva del pa&iacute;s- es muy importante haber sido recibidos por el ministro Sica, para buscar soluciones a los problemas actuales y reforzar las pol&iacute;ticas que fomentan a la industria nacional y las exportaciones industriales&rdquo;, destac&oacute; el titular de CAMIMA.</span></span></p>

<p style="margin-left:0cm; margin-right:0cm"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">Acompa&ntilde;aron a Ammaturo, el vicepresidente de CAMIMA, Alberto Gesell, y el secretario de la entidad, Aldo Lo Russo. Por parte del ministerio, Dante Sica estuvo acompa&ntilde;ado por el jefe de Asesores del Ministerio, Dami&aacute;n Testori.</span></span></p>
',
                'breve' => '<p style="margin-left:0cm; margin-right:0cm"><span style="font-size:16px"><span style="font-family:Calibri,sans-serif">El ministro de Producci&oacute;n y Trabajo, Dante Sica, recibi&oacute; al presidente de la C&aacute;mara de la Peque&ntilde;a y Mediana Industria Metal&uacute;rgica (CAMIMA), Jos&eacute; Luis Ammaturo, quien &ndash;junto a otros directivos de la entidad- plante&oacute; la situaci&oacute;n del sector, los temas que preocupan y las perspectivas a futuro.</span></span></p>
',
                    'ruta' => 'ofertas_78.jpeg?14',
                    'habilitado' => 1,
                    'portada' => 1,
                    'orden' => '',
                    'pdf' => '',
                    'otros' => NULL,
                    'image' => NULL,
                    'category_id' => 1,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                49 => 
                array (
                    'id' => 79,
                    'titulo' => 'CAMIMA participó de una nueva reunión sobre violencia laboral',
                    'descripcion' => '<p style="margin-left:0cm; margin-right:0cm"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">La vicepresidenta 2&deg; de CAMIMA, Roxana Petrecca, particip&oacute;, en representaci&oacute;n de la c&aacute;mara, de una nueva reuni&oacute;n junto con la coordinadora de la Oficina de Asesoramiento sobre violencia laboral, Dra. Patricia Saenz, y otros colaboradores del sector, en la cual expuso la problem&aacute;tica de las empresas m&aacute;s peque&ntilde;as que no cuentan con departamento de RR.HH. o legales, que son atendidas directamente por sus due&ntilde;os, y en un contexto donde las leyes laborales benefician totalmente al empleado, y desprotegen a las pymes. </span></span></p>

<p style="margin-left:0cm; margin-right:0cm"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">Si bien a esta oficina recurren los trabajadores que son v&iacute;ctimas de violencia en sus empresas, tambi&eacute;n comprenden que muchas veces el problema es a la inversa, para lo cual se comprometieron a brindar a las pymes todo tipo de asesoramiento y atenci&oacute;n para poder resolver esta problem&aacute;tica.</span></span></p>
',
                    'breve' => '<p style="margin-left:0cm; margin-right:0cm"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">La vicepresidenta 2&deg; de CAMIMA, Roxana Petrecca, particip&oacute;, en representaci&oacute;n de la c&aacute;mara, de una nueva reuni&oacute;n junto con la coordinadora de la Oficina de Asesoramiento sobre violencia laboral, Dra. Patricia Saenz, y otros colaboradores del sector, en la cual expuso la problem&aacute;tica de las empresas m&aacute;s peque&ntilde;as que no cuentan con departamento de RR.HH. o legales, que son atendidas directamente por sus due&ntilde;os, y en un contexto donde las leyes laborales benefician totalmente al empleado, y desprotegen a las pymes. </span></span></p>
',
                    'ruta' => 'ofertas_79.jpg?66',
                    'habilitado' => 1,
                    'portada' => 0,
                    'orden' => '',
                    'pdf' => '',
                    'otros' => NULL,
                    'image' => NULL,
                    'category_id' => 3,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                50 => 
                array (
                    'id' => 80,
                    'titulo' => 'CAMIMA acompañó la inauguración del Parque Industrial La Bernalesa',
                    'descripcion' => '<p><span style="font-size:14px">El presidente de CAMIMA, Jos&eacute; Luis Ammaturo, particip&oacute; de la inauguraci&oacute;n del Parque Industrial La Bernalesa, junto al intendente de Quilmes, Martiniano Molina; el secretario de Industria bonaerense, Nicol&aacute;s Zabala; el secretario de la UOM Quilmes, Gutierrez y otras autoridades.<br />
CAMIMA respald&oacute; la creaci&oacute;n de este Parque junta a otras asociasiones, como UIPBA, CAME, FEBA, y ADIBA.</span></p>
',
                    'breve' => '<p><span style="font-size:14px"><span style="font-family:Tahoma,Geneva,sans-serif">El presidente de CAMIMA, Jos&eacute; Luis Ammaturo, particip&oacute; de la inauguraci&oacute;n del Parque Industrial La Bernalesa, junto al intendente de Quilmes, Martiniano Molina; el secretario de Industria bonaerense, Nicol&aacute;s Zabala; el secretario de la UOM Quilmes, Gutierrez y otras autoridades.<br />
CAMIMA respald&oacute; la creaci&oacute;n de este Parque junta a otras asociasiones, como UIPBA, CAME, FEBA, y ADIBA.</span></span></p>
',
                    'ruta' => 'ofertas_80.jpg?44',
                    'habilitado' => 1,
                    'portada' => 1,
                    'orden' => '',
                    'pdf' => '',
                    'otros' => NULL,
                    'image' => NULL,
                    'category_id' => 3,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                51 => 
                array (
                    'id' => 81,
                    'titulo' => 'CAMIMA firmó acuerdo con la UOM por un incremento adicional de salarios',
                'descripcion' => '<div style="-webkit-text-stroke-width:0px; text-align:left"><span style="font-size:small"><span style="color:#222222"><span style="font-family:Arial,Helvetica,sans-serif"><span style="background-color:#ffffff"><span style="font-family:verdana,sans-serif">La C&aacute;mara de la Peque&ntilde;a y Mediana Industria Metal&uacute;rgica (CAMIMA), junto a otras c&aacute;maras del sector, y la Uni&oacute;n Obrera Metal&uacute;rgica (UOM), firmaron un acuerdo que estipula un aumento del 12,64 por ciento de los salarios b&aacute;sicos, adicionales al aumento ya otorgado. Con este &uacute;ltimo incremento, el aumento salarial total del sector en el per&iacute;odo de vigencia del Acuerdo Salarial 2018 resulta en el orden del 40 por ciento. Adem&aacute;s, se pagar&aacute; la Asignaci&oacute;n No Remunerativa en el marco de la aplicaci&oacute;n del Decreto DNU del Poder Ejecutivo Nacional 1043/2018. Las extensas negociaciones que condujeron al acuerdo firmado se concretaron en el marco de la instancia de revisi&oacute;n prevista oportunamente en la cl&aacute;usula tercera del acuerdo de mayo 2018.</span></span></span></span></span></div>

<div style="-webkit-text-stroke-width:0px; text-align:left"><span style="font-size:small"><span style="color:#222222"><span style="font-family:Arial,Helvetica,sans-serif"><span style="background-color:#ffffff"><span style="font-family:verdana,sans-serif">El incremento salarial adicional acordado se abonar&aacute; en dos cuotas acumulativas. La primera ser&aacute; del 5 por ciento y se pagar&aacute; con los salarios de febrero, y la segunda cuota del 7,27 por ciento se pagar&aacute; con los salarios de marzo. &ldquo;De esta manera, el incremento salarial que rige desde el 1 de abril de 2018 al 31 de marzo de 2019 estar&aacute; en el orden del 40 por ciento a los que se suma el bono de fin de a&ntilde;o de $5.000&rdquo;, detall&oacute; el presidente de CAMIMA, Jos&eacute; Luis Ammaturo.</span></span></span></span></span></div>

<div style="-webkit-text-stroke-width:0px; text-align:left"><span style="font-size:small"><span style="color:#222222"><span style="font-family:Arial,Helvetica,sans-serif"><span style="background-color:#ffffff"><span style="font-family:verdana,sans-serif">Dentro del acuerdo se estipul&oacute; que aquellas empresas que se encuentren en dificultades, podr&aacute;n negociar con la representaci&oacute;n sindical la adecuaci&oacute;n de los plazos de pago de la Asignaci&oacute;n del Decreto 1043.</span></span></span></span></span></div>

<div style="-webkit-text-stroke-width:0px; text-align:left"><span style="font-size:small"><span style="color:#222222"><span style="font-family:Arial,Helvetica,sans-serif"><span style="background-color:#ffffff"><span style="font-family:verdana,sans-serif">&ldquo;El acuerdo se alcanz&oacute; en el marco de una nueva negociaci&oacute;n que requiri&oacute; este a&ntilde;o la paritaria y que signific&oacute; un gran esfuerzo tanto por parte de los trabajadores como del sector empresario&rdquo;, se&ntilde;al&oacute; Ammaturo.</span></span></span></span></span></div>

<div style="-webkit-text-stroke-width:0px; text-align:left"><span style="font-size:small"><span style="color:#222222"><span style="font-family:Arial,Helvetica,sans-serif"><span style="background-color:#ffffff"><span style="font-family:verdana,sans-serif">Al respecto, record&oacute; que &ldquo;durante estas &uacute;ltimas semanas se realizaron intensas reuniones con la representaci&oacute;n sindical para intentar alcanzar un acuerdo que atiende las necesidades de los trabajadores y de las empresas, con el objetivo de preservar las fuentes de trabajo&rdquo;.</span></span></span></span></span></div>

<div style="-webkit-text-stroke-width:0px; text-align:left"><span style="font-size:small"><span style="color:#222222"><span style="font-family:Arial,Helvetica,sans-serif"><span style="background-color:#ffffff"><span style="font-family:verdana,sans-serif">&ldquo;Las pymes, como las mayores generadoras de empleo de todo el pa&iacute;s, est&aacute;n comprometidas con las necesidades tanto de los trabajadores como de los empresarios y hacen un esfuerzo permanente por alcanzar acuerdos a trav&eacute;s del di&aacute;logo&rdquo;, concluy&oacute; el titular de CAMIMA.</span></span></span></span></span></div>
',
                'breve' => '<div style="-webkit-text-stroke-width:0px; text-align:left"><span style="font-size:small"><span style="color:#222222"><span style="font-family:Arial,Helvetica,sans-serif"><span style="background-color:#ffffff"><span style="font-family:verdana,sans-serif">La C&aacute;mara de la Peque&ntilde;a y Mediana Industria Metal&uacute;rgica (CAMIMA), junto a otras c&aacute;maras del sector, y la Uni&oacute;n Obrera Metal&uacute;rgica (UOM), firmaron un acuerdo que estipula un aumento del 12,64 por ciento de los salarios b&aacute;sicos, adicionales al aumento ya otorgado. Con este &uacute;ltimo incremento, el aumento salarial total del sector en el per&iacute;odo de vigencia del Acuerdo Salarial 2018 resulta en el orden del 40 por ciento. Adem&aacute;s, se pagar&aacute; la Asignaci&oacute;n No Remunerativa en el marco de la aplicaci&oacute;n del Decreto DNU del Poder Ejecutivo Nacional 1043/2018. Las extensas negociaciones que condujeron al acuerdo firmado se concretaron en el marco de la instancia de revisi&oacute;n prevista oportunamente en la cl&aacute;usula tercera del acuerdo de mayo 2018.</span></span></span></span></span></div>
',
                    'ruta' => 'ofertas_81.png?27',
                    'habilitado' => 1,
                    'portada' => 1,
                    'orden' => '',
                    'pdf' => '',
                    'otros' => NULL,
                    'image' => NULL,
                    'category_id' => 1,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                52 => 
                array (
                    'id' => 82,
                    'titulo' => 'CAMIMA participó del brindis de fin de año de la UIPBA',
                'descripcion' => '<p>Autoridades de la C&aacute;mara de la Peque&ntilde;a y Mediana Industria Metal&uacute;rgica Argentina, encabezadas por Jos&eacute; Luis Ammaturo&nbsp;y Pablo Reale, participaron del brindis de fin de a&ntilde;o organizado por la Uni&oacute;n Industrial de la Provincia de Buenos Aires (UIPBA). Durante el encuentro, los empresarios intercambiaron opiniones y un an&aacute;lisis del a&ntilde;o para la industria, adem&aacute;s de compartir buenos deseos para el a&ntilde;o pr&oacute;ximo.</p>
',
                'breve' => '<p><span style="font-size:16px"><span style="font-family:Verdana,Geneva,sans-serif">Autoridades de la C&aacute;mara de la Peque&ntilde;a y Mediana Industria Metal&uacute;rgica Argentina, encabezadas por Jos&eacute; Luis Ammaturo&nbsp;y Pablo Reale, participaron del brindis de fin de a&ntilde;o organizado por la Uni&oacute;n Industrial de la Provincia de Buenos Aires (UIPBA). Durante el encuentro, los empresarios intercambiaron opiniones y un an&aacute;lisis del a&ntilde;o para la industria, adem&aacute;s de compartir buenos deseos para el a&ntilde;o pr&oacute;ximo.</span></span></p>
',
                    'ruta' => 'ofertas_82.jpg?82',
                    'habilitado' => 0,
                    'portada' => 0,
                    'orden' => '',
                    'pdf' => '',
                    'otros' => NULL,
                    'image' => NULL,
                    'category_id' => 3,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                53 => 
                array (
                    'id' => 83,
                    'titulo' => 'Reunión de fin de año de CARMAHE',
                    'descripcion' => '<p style="margin-left:0cm; margin-right:0cm; text-align:justify"><span style="font-size:14px"><span style="font-family:Verdana,Geneva,sans-serif">El presidente de CAMIMA, Jos&eacute; Luis Ammaturo, y Juan Giraudi, socio de la entidad, fueron invitados a participar de la reuni&oacute;n de cierre de a&ntilde;o que organiz&oacute; CARMAHE, donde&nbsp;compartieron un momento entre colegas, contando sus experiencias del a&ntilde;o y expectativas para 2019.</span></span></p>

<p style="margin-left:0cm; margin-right:0cm; text-align:justify"><span style="font-size:14px"><span style="font-family:Verdana,Geneva,sans-serif">Durante el encuentro, el presidente de CARMAHE, Jorge G&ouml;ttert, hizo un balance de la econom&iacute;a y de la industria argentina en 2018. Tras destacar las&nbsp;turbulencias que se verificaron a lo largo de este a&ntilde;o, confirm&oacute; el compromiso de CARMAHE para ayudar a&nbsp;superar las crisis y conseguir el futuro mejor que el sector se merece.&nbsp;</span></span></p>

<p style="margin-left:0cm; margin-right:0cm; text-align:justify"><span style="font-size:14px"><span style="font-family:Verdana,Geneva,sans-serif">El secretario de la C&aacute;mara, Pedro Cascales, dio cierre a la cena con un brindis, resaltando y agradeciendo el trabajo de las pymes: &ldquo;si algo nos caracteriza a las pymes es la fuerza, el entusiasmo, la flexibilidad ante la crisis y ver la crisis como oportunidad de aprendizaje&rdquo;, remarc&oacute;.</span></span></p>

<p style="margin-left:0cm; margin-right:0cm"><span style="font-size:14px"><span style="font-family:Verdana,Geneva,sans-serif">Adem&aacute;s,&nbsp;Todos los presentes destacaron el buen trabajo de CARMAHE y de la esperanza para superar esta crisis a trav&eacute;s del compromiso de las pymes de cara el 2019.</span></span></p>
',
                    'breve' => '<p style="margin-left:0cm; margin-right:0cm; text-align:justify"><span style="font-family:Verdana,Geneva,sans-serif">El presidente de CAMIMA, Jos&eacute; Luis Ammaturo, y Juan Giraudi, socio de la entidad, fueron invitados a participar de la reuni&oacute;n de cierre de a&ntilde;o que organiz&oacute; CARMAHE, donde&nbsp;compartieron un momento entre colegas, contando sus experiencias del a&ntilde;o y expectativas para 2019.</span></p>

<p style="margin-left:0cm; margin-right:0cm; text-align:justify">&nbsp;</p>
',
                    'ruta' => 'ofertas_83.jpg?53',
                    'habilitado' => 1,
                    'portada' => 0,
                    'orden' => '',
                    'pdf' => '',
                    'otros' => NULL,
                    'image' => NULL,
                    'category_id' => 3,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                54 => 
                array (
                    'id' => 84,
                    'titulo' => 'CAMIMA participó del brindis de fin de año de la UIPBA',
                'descripcion' => '<p style="margin-left:0cm; margin-right:0cm"><span style="font-size:14px">Autoridades de la C&aacute;mara de la Peque&ntilde;a y Mediana Industria Metal&uacute;rgica Argentina, encabezadas por Jos&eacute; Luis Ammaturo&nbsp;y Pablo Reale, participaron del brindis de fin de a&ntilde;o organizado por la Uni&oacute;n Industrial de la Provincia de Buenos Aires (UIPBA). Durante el encuentro, los empresarios intercambiaron opiniones y un an&aacute;lisis del a&ntilde;o para la industria, adem&aacute;s de compartir buenos deseos para el a&ntilde;o pr&oacute;ximo.</span></p>
',
                'breve' => '<p style="margin-left:0cm; margin-right:0cm"><span style="font-size:14px">Autoridades de la C&aacute;mara de la Peque&ntilde;a y Mediana Industria Metal&uacute;rgica Argentina, encabezadas por Jos&eacute; Luis Ammaturo&nbsp;y Pablo Reale, participaron del brindis de fin de a&ntilde;o organizado por la Uni&oacute;n Industrial de la Provincia de Buenos Aires (UIPBA). Durante el encuentro, los empresarios intercambiaron opiniones y un an&aacute;lisis del a&ntilde;o para la industria, adem&aacute;s de compartir buenos deseos para el a&ntilde;o pr&oacute;ximo.</span></p>
',
                    'ruta' => 'ofertas_84.jpg?76',
                    'habilitado' => 1,
                    'portada' => 0,
                    'orden' => '',
                    'pdf' => '',
                    'otros' => NULL,
                    'image' => NULL,
                    'category_id' => 1,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                55 => 
                array (
                    'id' => 85,
                    'titulo' => 'Nueva reunión sobre modelo de protocolo de prevención de violencia laboral',
                    'descripcion' => '<p>La vicepresidenta 2&deg; de CAMIMA, Roxana Petrecca, particip&oacute; de una nueva reuni&oacute;n en el marco de la implementaci&oacute;n del modelo de &ldquo;Protocolo para la prevenci&oacute;n de violencia laboral en organizaciones empresariales&rdquo;, organizada por la Oficina de Asesoramiento sobre Violencia Laboral. El objetivo es brindar asesoramiento para lograr, mediante buenas pr&aacute;cticas, un buen clima laboral, que concluye en un mejor rendimiento del trabajador, fortaleciendo a la vez la producci&oacute;n de las empresas.</p>

<p>En esta oportunidad, el encuentro cont&oacute; con la exposici&oacute;n de Mirta Nakkache, psicoanalista y especialista en el campo laboral, y de Eduardo Daniel Sicardi, psic&oacute;logo, consultor en Psicolog&iacute;a del trabajo y coordinador del Programa Asistencia en Mobbing de la Universidad de Buenos Aires.</p>
',
                    'breve' => '<p><span style="font-size:14px">La vicepresidenta 2&deg; de CAMIMA, Roxana Petrecca, particip&oacute; de una nueva reuni&oacute;n en el marco de la implementaci&oacute;n del modelo de &ldquo;Protocolo para la prevenci&oacute;n de violencia laboral en organizaciones empresariales&rdquo;, organizada por la Oficina de Asesoramiento sobre Violencia Laboral. El objetivo es brindar asesoramiento para lograr, mediante buenas pr&aacute;cticas, un buen clima laboral, que concluye en un mejor rendimiento del trabajador, fortaleciendo a la vez la producci&oacute;n de las empresas.</span></p>
',
                    'ruta' => 'ofertas_85.jpg?46',
                    'habilitado' => 1,
                    'portada' => 1,
                    'orden' => '',
                    'pdf' => '',
                    'otros' => NULL,
                    'image' => NULL,
                    'category_id' => 3,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                56 => 
                array (
                    'id' => 86,
                    'titulo' => 'CAMIMA firmó acuerdo con ASIMRA por un incremento adicional',
                'descripcion' => '<p style="margin-left:0cm; margin-right:0cm; text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">La C&aacute;mara de la Peque&ntilde;a y Mediana Industria Metal&uacute;rgica (CAMIMA), junto a otras c&aacute;maras del sector, y la Asociaci&oacute;n de Supervisores de la Industria Metalmec&aacute;nica de la Argentina (ASIMRA), firmaron un acuerdo que estipula incrementos en marzo y abril de 2019 para los salarios de los supervisores del sector metal&uacute;rgico, que se suman al aumento ya otorgado hasta septiembre de 2018. De esta manera, el acuerdo salarial anual 2018, con vigencia entre el 1 de mayo 2018 y el 30 de abril de 2019, totaliza 40,11 por ciento.</span></span></p>

<p style="margin-left:0cm; margin-right:0cm; text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">Adem&aacute;s, se pagar&aacute; la Asignaci&oacute;n No Remunerativa en el marco de la aplicaci&oacute;n del Decreto DNU del Poder Ejecutivo Nacional 1043/2018. </span></span></p>

<p style="margin-left:0cm; margin-right:0cm; text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">Las negociaciones se realizaron en el marco de la instancia de revisi&oacute;n prevista oportunamente en el acuerdo de mayo 2018.</span></span></p>

<p style="margin-left:0cm; margin-right:0cm; text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">&ldquo;Este acuerdo es fruto del di&aacute;logo que mantenemos en forma permanente los empresarios y trabajadores del sector metal&uacute;rgico y que buscan atender a las necesidades de ambas partes, propiciando siempre preservar las fuentes de trabajo&rdquo;, afirm&oacute; el presidente de CAMIMA, Jos&eacute; Luis Ammaturo, tras la firma del documento.</span></span></p>

<p style="margin-left:0cm; margin-right:0cm; text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">&ldquo;Tanto los trabajadores como los empresarios metal&uacute;rgicos estamos comprometidos en cuidar el empleo y desarrollar la industria nacional, por eso resultan fundamentales estas instancias de di&aacute;logo que ratifican que siempre se puede avanzar a partir de acuerdos&rdquo;, concluy&oacute; el titular de CAMIMA.</span></span></p>
',
                'breve' => '<p style="margin-left:0cm; margin-right:0cm; text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">La C&aacute;mara de la Peque&ntilde;a y Mediana Industria Metal&uacute;rgica (CAMIMA), junto a otras c&aacute;maras del sector, y la Asociaci&oacute;n de Supervisores de la Industria Metalmec&aacute;nica de la Argentina (ASIMRA), firmaron un acuerdo que estipula incrementos en marzo y abril de 2019 para los salarios de los supervisores del sector metal&uacute;rgico, que se suman al aumento ya otorgado hasta septiembre de 2018. De esta manera, el acuerdo salarial anual 2018, con vigencia entre el 1 de mayo 2018 y el 30 de abril de 2019, totaliza 40,11 por ciento.</span></span></p>
',
                    'ruta' => 'ofertas_86.jpg?51',
                    'habilitado' => 1,
                    'portada' => 1,
                    'orden' => '',
                    'pdf' => '',
                    'otros' => NULL,
                    'image' => NULL,
                    'category_id' => 2,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                57 => 
                array (
                    'id' => 87,
                    'titulo' => 'CAMIMA participó de una reunión de la mesa metalmecánica',
                    'descripcion' => '<p><span style="font-family:Verdana,Geneva,sans-serif"><span style="font-size:12px">El presidente de CAMIMA, Jos&eacute; Luis Ammaturo, y el gerente de la entidad, Fernando Ruiz y Blanco, participaron de una nueva reuni&oacute;n de la mesa metalmec&aacute;nica, encabezada por el secretario de Industria, Fernando Grasso.&nbsp;En el encuentro se acord&oacute; la apertura de mesas de trabajo en el corto plazo, en pos de mejorar la situaci&oacute;n del sector.</span></span></p>

<p><span style="font-family:Verdana,Geneva,sans-serif"><span style="font-size:12px">Desde el Gobierno se&ntilde;alaron que estas mesas buscan fortalecer la competitividad del sector en el mercado interno, potenciar las exportaciones y fomentar la incorporaci&oacute;n de mayor innovaci&oacute;n y tecnolog&iacute;a con foco en cuatro segmentos de la industria metalmec&aacute;nica: procesos met&aacute;licos (fundici&oacute;n de acero y aluminio, y forja, prensado estampado y laminado), artefactos y equipamiento el&eacute;ctrico (conductores de cables y equipos de iluminaci&oacute;n, entre otros), maquinaria y equipos industriales (de uso general y especial para distintas industrias) y tecnolog&iacute;a m&eacute;dica.</span></span></p>

<p dir="ltr"><span style="font-family:Verdana,Geneva,sans-serif"><span style="font-size:12px">Entre otros actores, se acordaron tres ejes de trabajo para cada uno de los segmentos:</span></span></p>

<ul>
<li dir="ltr">
<p dir="ltr"><span style="font-family:Verdana,Geneva,sans-serif"><span style="font-size:12px">Exportaciones: desarrollo de nuevos mercados y acompa&ntilde;amiento a PyMEs, reducci&oacute;n de costos de exportaci&oacute;n, certificaci&oacute;n de normas y pre y post financiamiento de exportaciones.</span></span></p>
</li>
<li dir="ltr">
<p dir="ltr"><span style="font-family:Verdana,Geneva,sans-serif"><span style="font-size:12px">Innovaci&oacute;n y tecnolog&iacute;a: proveedores y calidad, red I+D+i &nbsp;e industrias 4.0, gesti&oacute;n y modernizaci&oacute;n tecnol&oacute;gica.</span></span></p>
</li>
<li dir="ltr">
<p dir="ltr"><span style="font-family:Verdana,Geneva,sans-serif"><span style="font-size:12px">Mercado interno y fortalecimiento industrial: cadena de valor (insumos y reglamentos t&eacute;cnicos), Ley de compre argentino y desarrollo de proveedores, aspectos tributarios y el bono de bienes de capital, as&iacute; como diversas tem&aacute;ticas laborales vinculadas a costos no salariales y capacitaci&oacute;n, entre otros.</span></span></p>
</li>
</ul>

<p><span style="font-family:Verdana,Geneva,sans-serif"><span style="font-size:12px">De la reuni&oacute;n, adem&aacute;s de CAMIMA, participaron directivos de ADIMRA, CARMAHE y c&aacute;maras sectoriales de C&oacute;rdoba y Santa Fe. En representaci&oacute;n del sector de los trabajadores estuvo presente Antonio Cal&oacute;, secretario de la UOM, y dirigentes de ASIMRA.<br />
Grasso estuvo acompa&ntilde;ado por Mariano Meyer, secretario de Emprendedores y Pymes.</span></span></p>
',
                    'breve' => '<p><span style="font-family:Verdana,Geneva,sans-serif"><span style="font-size:14px">El presidente de CAMIMA, Jos&eacute; Luis Ammaturo, y el gerente de la entidad, Fernando Ruiz y Blanco, participaron de una nueva reuni&oacute;n de la mesa metalmec&aacute;nica, encabezada por el secretario de Industria, Fernando Grasso.&nbsp;</span></span></p>

<p><span style="font-family:Verdana,Geneva,sans-serif"><span style="font-size:14px">En el encuentro se acord&oacute; la apertura de mesas de trabajo en el corto plazo, en pos de mejorar la situaci&oacute;n del sector.</span></span></p>
',
                    'ruta' => 'ofertas_87.jpg?53',
                    'habilitado' => 1,
                    'portada' => 1,
                    'orden' => '',
                    'pdf' => '',
                    'otros' => NULL,
                    'image' => NULL,
                    'category_id' => 3,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                58 => 
                array (
                    'id' => 88,
                    'titulo' => 'Repercusiones de la reunión de la mesa metalmecánica',
                    'descripcion' => '<p><span style="color:null"><span style="font-family:Tahoma,Geneva,sans-serif"><span style="font-size:14px">El gerente de CAMIMA, Fernando Ruiz y Blanco, fue consultado por el portal Iprofesional.com respecto de la &uacute;ltima reuni&oacute;n de la mesa metalmec&aacute;nica. &ldquo;Sica conoce bien el pa&ntilde;o industrial y lo que se plante&oacute; en la mesa es modernizar la legislaci&oacute;n laboral para ganar nuevos mercados&rdquo;, dijo a ese medio.</span></span></span></p>

<p><span style="font-family:Tahoma,Geneva,sans-serif"><span style="font-size:14px"><span style="color:null">Para leer la nota, </span><a href="https://www.iprofesional.com/politica/284357-cgt-despido-desempleo-Reformal-laboral-el-Gobierno-apura-la-marcha-por-Brasil-y-FMI"><span style="color:null">click ac&aacute;</span></a></span></span></p>
',
                    'breve' => '<p><span style="color:null"><span style="font-family:Tahoma,Geneva,sans-serif"><span style="font-size:14px">El gerente de CAMIMA, Fernando Ruiz y Blanco, fue consultado por el portal Iprofesional.com respecto de la &uacute;ltima reuni&oacute;n de la mesa metalmec&aacute;nica. &ldquo;Sica conoce bien el pa&ntilde;o industrial y lo que se plante&oacute; en la mesa es modernizar la legislaci&oacute;n laboral para ganar nuevos mercados&rdquo;, dijo a ese medio.</span></span></span></p>

<p><span style="font-family:Tahoma,Geneva,sans-serif"><span style="font-size:14px"><span style="color:null">Para leer la nota, </span><a href="https://www.iprofesional.com/politica/284357-cgt-despido-desempleo-Reformal-laboral-el-Gobierno-apura-la-marcha-por-Brasil-y-FMI"><span style="color:null">click ac&aacute;</span></a></span></span></p>
',
                    'ruta' => 'ofertas_88.jpeg?78',
                    'habilitado' => 1,
                    'portada' => 1,
                    'orden' => '',
                    'pdf' => '',
                    'otros' => NULL,
                    'image' => NULL,
                    'category_id' => 1,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                59 => 
                array (
                    'id' => 89,
                    'titulo' => 'Presentación de beneficios para emprendedores y pymes del Ministerio de Producción y Trabajo',
                'descripcion' => '<p><span style="font-size:12px"><span style="font-family:Verdana,Geneva,sans-serif">El director de Estrategias de Atenci&oacute;n a Emprendedores y Pymes, Ignacio As&iacute;s, present&oacute; en la sede de la C&aacute;mara de la Peque&ntilde;a y Mediana Industria Metal&uacute;rgica Argentina (CAMIMA) distintos beneficios para emprendedores y pymes disponibles en el Ministerio de Producci&oacute;n y Trabajo de la naci&oacute;n. Se trata de&nbsp;instrumentos de colaboraci&oacute;n/asistencia que se ponen a disposici&oacute;n de las empresas<strong>.</strong></span></span></p>

<p style="margin-left:0px; margin-right:0px; text-align:justify"><span style="font-size:12px"><span style="font-family:Verdana,Geneva,sans-serif"><span style="color:#333333"><span style="background-color:#ffffff">las categor&iacute;as de apoyo/asistencia que se propusieron durante la reuni&oacute;n fueron, entre otras, las siguientes:</span></span></span></span></p>

<p style="margin-left:0px; margin-right:0px; text-align:justify"><span style="font-size:12px"><span style="font-family:Verdana,Geneva,sans-serif"><span style="color:#333333"><span style="background-color:#ffffff"><strong>LAS NECESIDADES DE LOS EMPRENDEDORES Y LAS PYMES</strong>&nbsp;</span></span></span></span></p>

<p style="margin-left:0px; margin-right:0px; text-align:justify"><span style="font-size:12px"><span style="font-family:Verdana,Geneva,sans-serif"><span style="color:#333333"><span style="background-color:#ffffff"><strong>1.</strong>&nbsp;&nbsp;<strong>Formalizaci&oacute;n</strong></span></span></span></span></p>

<p style="margin-left:0px; margin-right:0px; text-align:justify"><span style="font-size:12px"><span style="font-family:Verdana,Geneva,sans-serif"><span style="color:#333333"><span style="background-color:#ffffff">Para la asistencia a emprendedores y PyMEs que tengan esta necesidad, el Ministerio de Producci&oacute;n puede prestar dos servicios:</span></span></span></span></p>

<p style="margin-left:0px; margin-right:0px; text-align:start"><span style="font-size:12px"><span style="font-family:Verdana,Geneva,sans-serif"><span style="color:#333333"><span style="background-color:#ffffff">a.&nbsp; &nbsp;Crear una empresa, principalmente a trav&eacute;s de la&nbsp;<a href="https://www.argentina.gob.ar/sas?mkt_hm=3&amp;utm_source=email_marketing&amp;utm_admin=61629&amp;utm_medium=email&amp;utm_campaign=Beneficios_para_Pymes" style="color:#1155cc" target="_blank">SAS - Sociedad por Acciones Simplificadas;</a></span></span></span></span></p>

<p style="margin-left:0px; margin-right:0px; text-align:justify"><span style="font-size:12px"><span style="font-family:Verdana,Geneva,sans-serif"><span style="color:#333333"><span style="background-color:#ffffff">b.&nbsp;&nbsp;Acceder a incentivos fiscales y beneficios, gracias al registro de la empresa o el emprendimiento en el&nbsp;<a href="https://www.argentina.gob.ar/produccion/registrarse-como-pyme?mkt_hm=4&amp;utm_source=email_marketing&amp;utm_admin=61629&amp;utm_medium=email&amp;utm_campaign=Beneficios_para_Pymes" style="color:#1155cc" target="_blank">Registro PyME</a>, el acceso a beneficios impositivos dependiendo de su condici&oacute;n (en particular si es una empresa de software), beneficios comerciales del&nbsp;<a href="http://digitalizatupyme.produccion.gob.ar/digitalizacionPyME/?mkt_hm=5&amp;utm_source=email_marketing&amp;utm_admin=61629&amp;utm_medium=email&amp;utm_campaign=Beneficios_para_Pymes" style="color:#1155cc" target="_blank">Plan de Innovaci&oacute;n Digital PyME</a>, y el&nbsp;<a href="https://www.argentina.gob.ar/acceder-al-beneficio-fiscal-para-inversores?mkt_hm=6&amp;utm_source=email_marketing&amp;utm_admin=61629&amp;utm_medium=email&amp;utm_campaign=Beneficios_para_Pymes" style="color:#1155cc" target="_blank">Registro de Instituciones de Capital Emprendedor</a>.&nbsp;<a href="http://digitalizatupyme.produccion.gob.ar/digitalizacionPyME/?mkt_hm=7&amp;utm_source=email_marketing&amp;utm_admin=61629&amp;utm_medium=email&amp;utm_campaign=Beneficios_para_Pymes" style="color:#1155cc" target="_blank">R&eacute;gimen de fomento a las inversiones.</a>&nbsp;</span></span></span></span></p>

<p style="margin-left:0px; margin-right:0px; text-align:justify"><span style="font-size:12px"><span style="font-family:Verdana,Geneva,sans-serif"><span style="color:#333333"><span style="background-color:#ffffff"><strong>2.</strong>&nbsp;&nbsp;<strong>Oportunidades de Negocios</strong></span></span></span></span></p>

<p style="margin-left:0px; margin-right:0px; text-align:justify"><span style="font-size:12px"><span style="font-family:Verdana,Geneva,sans-serif"><span style="color:#333333"><span style="background-color:#ffffff">Asistencia emprendedores y PyMEs a trav&eacute;s de los siguientes servicios:</span></span></span></span></p>

<p style="margin-left:0px; margin-right:0px; text-align:justify"><span style="font-size:12px"><span style="font-family:Verdana,Geneva,sans-serif"><span style="color:#333333"><span style="background-color:#ffffff">a. Desarrollarse como proveedores, gracias al acercamiento con grandes clientes del sector p&uacute;blico y privado, cuyos requisitos hacia su cadena de valor pueden traccionar el desarrollo de emprendedores y PyMEs (<a href="http://www.registroprodepro.gob.ar/?mkt_hm=8&amp;utm_source=email_marketing&amp;utm_admin=61629&amp;utm_medium=email&amp;utm_campaign=Beneficios_para_Pymes" style="color:#1155cc" target="_blank">ProDePro</a>,&nbsp;Ecosistema PyME<strong>***</strong>);</span></span></span></span></p>

<p style="margin-left:0px; margin-right:0px; text-align:justify"><span style="font-size:12px"><span style="font-family:Verdana,Geneva,sans-serif"><span style="color:#333333"><span style="background-color:#ffffff">b. Exportar e internacionalizar una empresa, gracias a plataformas de simple comercializaci&oacute;n externa (<a href="https://www.argentina.gob.ar/exportasimple?mkt_hm=9&amp;utm_source=email_marketing&amp;utm_admin=61629&amp;utm_medium=email&amp;utm_campaign=Beneficios_para_Pymes" style="color:#1155cc" target="_blank">Exporta Simple</a>), as&iacute; como el acompa&ntilde;amiento de la SEPyME y la&nbsp;<a href="http://www.inversionycomercio.org.ar/?mkt_hm=10&amp;utm_source=email_marketing&amp;utm_admin=61629&amp;utm_medium=email&amp;utm_campaign=Beneficios_para_Pymes" style="color:#1155cc" target="_blank">Agencia Argentina de Inversiones y Comercio Internacional</a>&nbsp;a trav&eacute;s de sus consultor&iacute;as.</span></span></span></span></p>

<p style="margin-left:0px; margin-right:0px; text-align:justify"><span style="font-size:12px"><span style="font-family:Verdana,Geneva,sans-serif"><span style="color:#333333"><span style="background-color:#ffffff">c. Importar tecnolog&iacute;as e insumos, gracias a facilidades previstas por el&nbsp;<a href="https://www.argentina.gob.ar/acceder-al-regimen-de-importacion-temporaria-ctit?mkt_hm=11&amp;utm_source=email_marketing&amp;utm_admin=61629&amp;utm_medium=email&amp;utm_campaign=Beneficios_para_Pymes" style="color:#1155cc" target="_blank">Certificado de Tipificaci&oacute;n de Importaci&oacute;n Temporaria</a>&nbsp;para exportar productos con valor agregado, o bienes de capital para impulsar la producci&oacute;n a trav&eacute;s de los Reg&iacute;menes&nbsp;<a href="https://www.argentina.gob.ar/obtener-descuentos-en-la-importacion-de-bienes-integrantes-de-grandes-proyectos-de-inversion?mkt_hm=12&amp;utm_source=email_marketing&amp;utm_admin=61629&amp;utm_medium=email&amp;utm_campaign=Beneficios_para_Pymes" style="color:#1155cc" target="_blank">256</a>&nbsp;y&nbsp;<a href="https://www.argentina.gob.ar/sites/default/files/instructivo-normativa-reg-1174.pdf?mkt_hm=13&amp;utm_source=email_marketing&amp;utm_admin=61629&amp;utm_medium=email&amp;utm_campaign=Beneficios_para_Pymes" style="color:#1155cc" target="_blank">1174</a>.</span></span></span></span></p>

<p style="margin-left:0px; margin-right:0px; text-align:justify"><span style="font-size:12px"><span style="font-family:Verdana,Geneva,sans-serif"><span style="color:#333333"><span style="background-color:#ffffff"><strong>3.</strong>&nbsp;&nbsp;<strong>Innovaci&oacute;n y Mejora Continua</strong></span></span></span></span></p>

<p style="margin-left:0px; margin-right:0px; text-align:start"><span style="font-size:12px"><span style="font-family:Verdana,Geneva,sans-serif"><span style="color:#333333"><span style="background-color:#ffffff">Una de las estrategias m&aacute;s efectivas para mejorar la competitividad de nuestros emprendimientos y PyMEs es el cambio tecnol&oacute;gico, con lo cual se desprenden mecanismos de innovaci&oacute;n y mejora de la productividad, tanto v&iacute;a productos y procesos como en m&eacute;todos de gesti&oacute;n empresarial.</span></span></span></span></p>

<p style="margin-left:0px; margin-right:0px; text-align:justify"><span style="font-size:12px"><span style="font-family:Verdana,Geneva,sans-serif"><span style="color:#333333"><span style="background-color:#ffffff">Para facilitar estos procesos internos en emprendedores y PyMEs, el Ministerio de Producci&oacute;n puede prestar los siguientes servicios:</span></span></span></span></p>

<p style="margin-left:0px; margin-right:0px; text-align:justify"><span style="font-size:12px"><span style="font-family:Verdana,Geneva,sans-serif"><span style="color:#333333"><span style="background-color:#ffffff">a.&nbsp;Orientaci&oacute;n para la registraci&oacute;n de marcas y patentes, principalmente a trav&eacute;s de los servicios tecnol&oacute;gicos del&nbsp;<a href="http://www.inpi.gob.ar/?mkt_hm=14&amp;utm_source=email_marketing&amp;utm_admin=61629&amp;utm_medium=email&amp;utm_campaign=Beneficios_para_Pymes" style="color:#1155cc" target="_blank">Instituto Nacional de la Propiedad Industrial (INPI);</a></span></span></span></span></p>

<p style="margin-left:0px; margin-right:0px; text-align:justify"><span style="font-size:12px"><span style="font-family:Verdana,Geneva,sans-serif"><span style="color:#333333"><span style="background-color:#ffffff">b.&nbsp;Facilitar la realizaci&oacute;n de ensayos y certificaciones, a trav&eacute;s del&nbsp;<a href="https://www.inti.gob.ar/?mkt_hm=15&amp;utm_source=email_marketing&amp;utm_admin=61629&amp;utm_medium=email&amp;utm_campaign=Beneficios_para_Pymes" style="color:#1155cc" target="_blank">Instituto Nacional de Tecnolog&iacute;a Industrial (INTI);</a></span></span></span></span></p>

<p style="margin-left:0px; margin-right:0px; text-align:justify"><span style="font-size:12px"><span style="font-family:Verdana,Geneva,sans-serif"><span style="color:#333333"><span style="background-color:#ffffff">c.&nbsp;Brindar capacitaci&oacute;n, a trav&eacute;s de la<a href="https://www.argentina.gob.ar/participar-de-capacitaciones-presenciales?mkt_hm=16&amp;utm_source=email_marketing&amp;utm_admin=61629&amp;utm_medium=email&amp;utm_campaign=Beneficios_para_Pymes">&nbsp;Academia Argentina de Emprendedores y PyMEs</a>, tanto virtual como presencialmente, as&iacute; como el programa de&nbsp;<a href="https://www.argentina.gob.ar/capacitar-al-personal-de-tu-pyme?mkt_hm=17&amp;utm_source=email_marketing&amp;utm_admin=61629&amp;utm_medium=email&amp;utm_campaign=Beneficios_para_Pymes" style="color:#1155cc" target="_blank">Capacitaci&oacute;n PyME</a>&nbsp;que reintegra inversiones en proyectos de capacitaci&oacute;n propios de las empresas.</span></span></span></span></p>

<p style="margin-left:0px; margin-right:0px; text-align:justify"><span style="font-size:12px"><span style="font-family:Verdana,Geneva,sans-serif"><span style="color:#333333"><span style="background-color:#ffffff">d.&nbsp;Facilitar asistencia t&eacute;cnica, en dise&ntilde;o estrat&eacute;gico (<a href="https://www.argentina.gob.ar/recibir-asistencia-para-mejorar-tu-pyme?mkt_hm=18&amp;utm_source=email_marketing&amp;utm_admin=61629&amp;utm_medium=email&amp;utm_campaign=Beneficios_para_Pymes" style="color:#1155cc" target="_blank">PyMEs D</a>), digitalizaci&oacute;n de procesos (<a href="http://digitalizatupyme.produccion.gob.ar/digitalizacionPyME/?mkt_hm=19&amp;utm_source=email_marketing&amp;utm_admin=61629&amp;utm_medium=email&amp;utm_campaign=Beneficios_para_Pymes" style="color:#1155cc" target="_blank">Plan de Innovaci&oacute;n Digital PyME</a>), y la asesor&iacute;a en la empresa a trav&eacute;s de los&nbsp;<a href="https://www.argentina.gob.ar/acceder-al-programa-expertos-pyme?mkt_hm=20&amp;utm_source=email_marketing&amp;utm_admin=61629&amp;utm_medium=email&amp;utm_campaign=Beneficios_para_Pymes" style="color:#1155cc" target="_blank">Expertos PyME</a>.</span></span></span></span></p>

<p style="margin-left:0px; margin-right:0px; text-align:start"><span style="font-size:12px"><span style="font-family:Verdana,Geneva,sans-serif"><span style="color:#333333"><span style="background-color:#ffffff"><strong>4.</strong>&nbsp;<strong>Financiamiento</strong></span></span></span></span></p>

<p style="margin-left:0px; margin-right:0px; text-align:start"><span style="font-size:12px"><span style="font-family:Verdana,Geneva,sans-serif"><span style="color:#333333"><span style="background-color:#ffffff">El financiamiento es la principal demanda de los emprendedores y las PyMEs argentinas. El acceso al cr&eacute;dito y a avales o garant&iacute;as es muy importante tanto para implementar proyectos de crecimiento, as&iacute; como para salvar situaciones actuales de ponen en riesgo la sostenibilidad del negocio</span></span></span></span></p>

<p style="margin-left:0px; margin-right:0px; text-align:start"><span style="font-size:12px"><span style="font-family:Verdana,Geneva,sans-serif"><span style="color:#333333"><span style="background-color:#ffffff">-El Ministerio de Producci&oacute;n cuenta con su propio banco de desarrollo, el&nbsp;<a href="https://www.bice.com.ar/?mkt_hm=21&amp;utm_source=email_marketing&amp;utm_admin=61629&amp;utm_medium=email&amp;utm_campaign=Beneficios_para_Pymes" style="color:#1155cc" target="_blank">Banco de Inversi&oacute;n y Comercio Exterior (BICE)</a>, orientado principalmente a&nbsp;<a href="https://www.bice.com.ar/productos/primer-credito-pyme/?mkt_hm=22&amp;utm_source=email_marketing&amp;utm_admin=61629&amp;utm_medium=email&amp;utm_campaign=Beneficios_para_Pymes" style="color:#1155cc" target="_blank">financiar</a>&nbsp;proyectos de inversi&oacute;n productiva de empresas. Para otras necesidades de financiamiento y seg&uacute;n la calificaci&oacute;n crediticia, el sistema de&nbsp;<a href="https://www.argentina.gob.ar/obtener-garantias-para-el-acceso-creditos?mkt_hm=23&amp;utm_source=email_marketing&amp;utm_admin=61629&amp;utm_medium=email&amp;utm_campaign=Beneficios_para_Pymes" style="color:#1155cc" target="_blank">Sociedades de Garant&iacute;as Rec&iacute;procas (SGR)</a>&nbsp;cuenta hoy con numerosos mecanismos de inclusi&oacute;n financiera al sistema crediticio para emprendedores y PyMEs a trav&eacute;s de la emisi&oacute;n de avales y garant&iacute;as, tanto para entidades bancarias como para el mercado de capitales. La empresa puede cargar sus datos en la&nbsp;<a href="http://dna2.produccion.gob.ar/dna2bpm/precalificacionsgr/SolicitudSGR?mkt_hm=24&amp;utm_source=email_marketing&amp;utm_admin=61629&amp;utm_medium=email&amp;utm_campaign=Beneficios_para_Pymes" style="color:#1155cc" target="_blank">Banca de Garant&iacute;as</a>&nbsp;y las SGR se ponen en contacto con las empresas. Adem&aacute;s, los emprendedores y PyMEs j&oacute;venes pueden acceder al&nbsp;<a href="https://www.argentina.gob.ar/produccion/fondo-semilla?mkt_hm=25&amp;utm_source=email_marketing&amp;utm_admin=61629&amp;utm_medium=email&amp;utm_campaign=Beneficios_para_Pymes" style="color:#1155cc" target="_blank">Fondo Semilla</a>,&nbsp;<a href="https://www.argentina.gob.ar/perfiles-de-aceleradoras?mkt_hm=26&amp;utm_source=email_marketing&amp;utm_admin=61629&amp;utm_medium=email&amp;utm_campaign=Beneficios_para_Pymes" style="color:#1155cc" target="_blank">Aceleradoras</a>&nbsp;y&nbsp;<a href="https://www.argentina.gob.ar/acceder-al-programa-fondo-expansion?mkt_hm=27&amp;utm_source=email_marketing&amp;utm_admin=61629&amp;utm_medium=email&amp;utm_campaign=Beneficios_para_Pymes" style="color:#1155cc" target="_blank">Fondos de Expansi&oacute;n</a>.</span></span></span></span></p>

<p style="margin-left:0px; margin-right:0px; text-align:justify"><span style="font-size:12px"><span style="font-family:Verdana,Geneva,sans-serif"><span style="color:#333333"><span style="background-color:#ffffff">-Ecosistema PyME es una metodolog&iacute;a de trabajo que pretende fortalecer la cadena de valor de las grandes empresas, identificando oportunidades de mejoras para PyMEs vinculadas (proveedores y clientes) aprovechando la capacidad empresarial de las empresas l&iacute;deres y el apoyo de los distintos programas del Ministerio.</span></span></span></span></p>
',
                'breve' => '<p><span style="font-size:14px"><span style="font-family:Verdana,Geneva,sans-serif">El director de Estrategias de Atenci&oacute;n a Emprendedores y Pymes, Ignacio As&iacute;s, present&oacute; en la sede de la C&aacute;mara de la Peque&ntilde;a y Mediana Industria Metal&uacute;rgica Argentina (CAMIMA) distintos beneficios para emprendedores y pymes disponibles en el Ministerio de Producci&oacute;n y Trabajo de la naci&oacute;n. Se trata de&nbsp;instrumentos de colaboraci&oacute;n /asistencia que se ponen a disposici&oacute;n de las empresas<strong>.</strong></span></span></p>
',
                    'ruta' => 'ofertas_89.jpeg?28',
                    'habilitado' => 1,
                    'portada' => 1,
                    'orden' => '',
                    'pdf' => '',
                    'otros' => NULL,
                    'image' => NULL,
                    'category_id' => 3,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                60 => 
                array (
                    'id' => 90,
                    'titulo' => 'CAMIMA participó de una nueva reunión de la mesa metalmecánica',
                    'descripcion' => '<p><span style="font-size:14px"><span style="font-family:Verdana,Geneva,sans-serif">La vicepresidente de CAMIMA, Rexana Petrecca; el asesor de la c&aacute;mara en asuntos legales y laborales, Gustavo&nbsp;Kechichian, y el gerente de la entidad, Fernando Ruiz y Blanco, participaron en representaci&oacute;n de CAMIMA de una nueva reuni&oacute;n de la mesa metalmec&aacute;nica, organizada por el Ministerio de Producci&oacute;n y Trabajo de la Naci&oacute;n. En esta oportunidad, el eje del encuentro fue la legislaci&oacute;n laboral, marco en el cual CAMIMA entreg&oacute; una carpeta con propuestas para trabajar.&nbsp;</span></span></p>

<p><span style="font-size:14px"><span style="font-family:Verdana,Geneva,sans-serif">La carpeta incluye propuestas e ideas con aspectos que CAMIMA entiende que se deber&iacute;an trabajar, revisar e incluso adaptar para mejorar la actual situaci&oacute;n laboral y, en mediano plazo, generar nuevos puestos de empleo en el sector.</span></span></p>

<p><span style="font-size:14px"><span style="font-family:Verdana,Geneva,sans-serif">A partir de este material entregado por CAMIMA, en la reuni&oacute;n se realiz&oacute; un listado de temas a seguir considerando para atender las necesidades de la industria y del empleo.</span></span></p>

<p><span style="font-size:14px"><span style="font-family:Verdana,Geneva,sans-serif">La reuni&oacute;n, que se realiz&oacute; en sede ministerial, estuvo encabezada por el secretario de Industria, Fernando Grasso, y el subsecretario de Pol&iacute;tica y Gesti&oacute;n Pyme, Dami&aacute;n Testori.</span></span></p>
',
                    'breve' => '<p><span style="font-size:14px"><span style="font-family:Verdana,Geneva,sans-serif">La vicepresidente de CAMIMA, Rexana Petrecca; el asesor de la c&aacute;mara en asuntos legales y laborales, Gustavo&nbsp;Kechichian, y el gerente de la entidad, Fernando Ruiz y Blanco, participaron en representaci&oacute;n de CAMIMA de una nueva reuni&oacute;n de la mesa metalmec&aacute;nica, organizada por el Ministerio de Producci&oacute;n y Trabajo de la Naci&oacute;n. En esta oportunidad, el eje del encuentro fue la legislaci&oacute;n laboral, marco en el cual CAMIMA entreg&oacute; una carpeta con propuestas para trabajar.&nbsp;</span></span></p>
',
                    'ruta' => 'ofertas_90.jpg?72',
                    'habilitado' => 1,
                    'portada' => 1,
                    'orden' => '',
                    'pdf' => '',
                    'otros' => NULL,
                    'image' => NULL,
                    'category_id' => 3,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                61 => 
                array (
                    'id' => 91,
                    'titulo' => 'CAMIMA participa de las mesas de análisis del sector metalmecánico',
                'descripcion' => '<p><span style="font-size:14px"><span style="font-family:Verdana,Geneva,sans-serif">Directivos de la C&aacute;mara de la Peque&ntilde;a y Mediana Industria Metal&uacute;rgica Argentina (CAMIMA)&nbsp;participaron de nuevas reuniones de las distintas submesas de an&aacute;lisis del sector metalmec&aacute;nico, organizadas por el Ministerio de Producci&oacute;n y Trabajo de la Naci&oacute;n, en el marco de los encuentros de la mesa metamec&aacute;nica.</span></span></p>

<p><span style="font-size:14px"><span style="font-family:Verdana,Geneva,sans-serif">El &uacute;ltimo encuentro se realiz&oacute; el viernes 29 de marzo y, como ya sucedi&oacute; en encuentro anteriores, las&nbsp;</span></span><span style="font-size:14px"><span style="font-family:Verdana,Geneva,sans-serif">submesas se dividen seg&uacute;n distintos ejes de an&aacute;lisis para el sector metalmec&aacute;nico, entre ellos: exportaciones, innovaci&oacute;n y tecnolog&iacute;a, mercado interno y fortalecimiento institucional y pol&iacute;tica laboral.&nbsp;<br />
En todas las submesas se trataron temas inherentes a la industria metal&uacute;rgica y se entregaron distintas propuestas, siendo escuchados por los runcionarios junto a los componentes de otras c&aacute;maras del sector, como ADIMRA y CARMAHE, adem&aacute;s de dirigentes sindicales, tando de la UOM como de ASIMRA.</span></span></p>
',
                'breve' => '<p><span style="font-size:14px"><span style="font-family:Verdana,Geneva,sans-serif">Directivos de la C&aacute;mara de la Peque&ntilde;a y Mediana Industria Metal&uacute;rgica Argentina (CAMIMA) participaron de nuevas reuniones de las submesas&nbsp;</span></span><span style="font-size:14px"><span style="font-family:Verdana,Geneva,sans-serif">de an&aacute;lisis del sector metalmec&aacute;nico, organizadas por el Ministerio de Producci&oacute;n y Trabajo de la Naci&oacute;n, en el marco de los encuentros de la mesa metamec&aacute;nica.</span></span></p>
',
                    'ruta' => 'ofertas_91.jpg?57',
                    'habilitado' => 1,
                    'portada' => 1,
                    'orden' => '',
                    'pdf' => '',
                    'otros' => NULL,
                    'image' => NULL,
                    'category_id' => 3,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                62 => 
                array (
                    'id' => 92,
                    'titulo' => 'Avanza un nuevo proyecto de formación profesional en Tortuguitas',
                    'descripcion' => '<p>El presidente de CAMIMA, Jos&eacute; Luis Ammaturo, y el prosecretario de la CGERA, Guillermo Siro, se reunieron en el Centro de Formaci&oacute;n Profesional 401 de Tortuguitas, partido de Malvinas Argentinas, para trabajar en la elaboraci&oacute;n de un proyecto de formaci&oacute;n profesional, en forma conjunta con la UOM y el municipio.</p>

<p>Se trata de un trabajo de colaboraci&oacute;n mutua entre el municipio, las entidades empresarias y el sindicato, que apunta a la formaci&oacute;n laboral y la terrminalidad del secundario, con el objetivo de mejorar la empleabilidad en el &aacute;mbito de ese distrito.</p>
',
                    'breve' => '<p><span style="font-family:Verdana,Geneva,sans-serif"><span style="font-size:14px">El presidente de CAMIMA, Jos&eacute; Luis Ammaturo, y el prosecretario de la CGERA, Guillermo Siro, se reunieron en el Centro de Formaci&oacute;n Profesional 401 de Tortuguitas, partido de Malvinas Argentinas, para trabajar en la elaboraci&oacute;n de un proyecto de formaci&oacute;n profesional, en forma conjunta con la UOM y el municipio.</span></span></p>

<p><span style="font-family:Verdana,Geneva,sans-serif"><span style="font-size:14px">Se trata de un trabajo de colaboraci&oacute;n mutua entre el municipio, las entidades empresarias y el sindicato, que apunta a la formaci&oacute;n laboral y la terrminalidad del secundario, con el objetivo de mejorar la empleabilidad en el &aacute;mbito de ese distrito.</span></span></p>
',
                    'ruta' => 'ofertas_92.jpg?59',
                    'habilitado' => 1,
                    'portada' => 1,
                    'orden' => '',
                    'pdf' => '',
                    'otros' => NULL,
                    'image' => NULL,
                    'category_id' => 3,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                63 => 
                array (
                    'id' => 93,
                    'titulo' => 'CAMIMA participó de la reunión de Directores Ejecutivos en la UIA',
                'descripcion' => '<p><span style="font-family:Verdana,Geneva,sans-serif"><span style="font-size:14px">CAMIMA&nbsp;-representada por el gerente general de CAMIMA, Fernando Ruiz y Blanco-&nbsp; particip&oacute; de la reuni&oacute;n de Directores Ejecutivos de las c&aacute;maras que conforman la Uni&oacute;n Industrial Argentina (UIA), donde se trataron diferentes temas de actualidad que hacen a la actividad industrial argentina, sus problemas y medidas necesarias para el corto, mediano y largo plazo.</span></span></p>

<p><span style="font-family:Verdana,Geneva,sans-serif"><span style="font-size:14px">Entre otras cuestiones, se plante&oacute; la necesidad de avanzar en medidas de corto plazo que permitan mejorar el consumo y apuntalar a la industria.</span></span></p>
',
                'breve' => '<p><span style="font-family:Verdana,Geneva,sans-serif"><span style="font-size:14px">CAMIMA&nbsp;-representada por el gerente general de CAMIMA, Fernando Ruiz y Blanco-&nbsp; particip&oacute; de la reuni&oacute;n de Directores Ejecutivos de las c&aacute;maras que conforman la Uni&oacute;n Industrial Argentina (UIA), donde se trataron diferentes temas de actualidad que hacen a la actividad industrial argentina, sus problemas y medidas necesarias para el corto, mediano y largo plazo.</span></span></p>
',
                    'ruta' => 'ofertas_93.jpg?55',
                    'habilitado' => 1,
                    'portada' => 1,
                    'orden' => '',
                    'pdf' => '',
                    'otros' => NULL,
                    'image' => NULL,
                    'category_id' => 3,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                64 => 
                array (
                    'id' => 94,
                    'titulo' => 'Beneficios para fabricantes de bienes de capital',
                'descripcion' => '<p style="margin-left:0cm; margin-right:0cm; text-align:justify"><span style="font-size:14px"><span style="font-family:Arial,Helvetica,sans-serif"><span style="background-color:#fffffe"><span style="color:black">El Decreto 196/2019, publicado en el Bolet&iacute;n Oficial, adem&aacute;s de renovar la aplicaci&oacute;n del Decreto 379/2001 (bono fiscal para los fabricantes de bienes de capital<strong>) introduce un adicional destinado a impulsar a esas empresas a invertir en desarrollo e innovaci&oacute;n.</strong></span></span></span></span></p>

<p style="margin-left:0cm; margin-right:0cm; text-align:justify"><span style="font-size:14px"><span style="font-family:Arial,Helvetica,sans-serif"><span style="background-color:#fffffe"><span style="color:black">El punto d) del art&iacute;culo 3 del decreto, establece que el beneficio del bono &ldquo;podr&aacute; ser incrementado hasta un quince por ciento de su cuant&iacute;a, en la medida que los beneficiarios acrediten, con cada solicitud, la realizaci&oacute;n de inversiones destinadas a la mejora de la productividad, la calidad y la innovaci&oacute;n en procesos y productos&hellip;&rdquo;. &ldquo;A tales efectos podr&aacute;n computarse hasta un equivalente al setenta por ciento (70%) del valor de las inversiones realizadas en innovaci&oacute;n, investigaci&oacute;n y desarrollo tecnol&oacute;gico, a partir del d&iacute;a 1&ordm; de enero de 2019&hellip;&rdquo; </span></span></span></span></p>

<p style="margin-left:0cm; margin-right:0cm; text-align:justify"><span style="font-size:14px"><span style="font-family:Arial,Helvetica,sans-serif"><span style="background-color:#fffffe"><span style="color:black">Las inversiones realizadas deben estar debidamente acreditadas y deber&aacute;n encontrase asociadas a proyectos y servicios tecnol&oacute;gicos <strong>desarrollados por Unidades de Vinculaci&oacute;n Tecnol&oacute;gica&nbsp; (UVT)</strong> o por una entidad que est&eacute; inscripta en el ROECYT.&nbsp;</span></span></span></span></p>

<p style="margin-left:0cm; margin-right:0cm; text-align:justify"><span style="font-size:14px"><span style="font-family:Arial,Helvetica,sans-serif"><span style="background-color:#fffffe"><strong><span style="color:black">CAMIMA, estuvo presente en la presentaci&oacute;n que se realiz&oacute; en la Secretar&iacute;a de Industria&nbsp;y,&nbsp;dado que es Unidad de Vinculaci&oacute;n Tecnol&oacute;gica (UVT), tiene la capacidad de ofrecer el servicio&nbsp;para las empresas.</span></strong></span></span></span></p>
',
                'breve' => '<p style="margin-left:0cm; margin-right:0cm; text-align:justify"><span style="font-size:16px"><span style="font-family:Arial,Helvetica,sans-serif"><span style="background-color:#fffffe"><span style="color:black">El Decreto 196/2019, publicado en el Bolet&iacute;n Oficial, adem&aacute;s de renovar la aplicaci&oacute;n del Decreto 379/2001 (bono fiscal para los fabricantes de bienes de capital<strong>) introduce un adicional destinado&nbsp;a impulsar a esas empresas a invertir en desarrollo e innovaci&oacute;n.</strong></span></span></span></span></p>
',
                    'ruta' => 'ofertas_94.jpg?94',
                    'habilitado' => 1,
                    'portada' => 1,
                    'orden' => '',
                    'pdf' => '',
                    'otros' => NULL,
                    'image' => NULL,
                    'category_id' => 3,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                65 => 
                array (
                    'id' => 97,
                    'titulo' => 'Se firmó el acuerdo salarial 2019 con la UOM',
                    'descripcion' => '<p style="margin-left:0cm; margin-right:0cm"><span style="font-size:14px"><span style="font-family:Arial,Helvetica,sans-serif">El lunes 20 de mayo a &uacute;ltima hora, en una reuni&oacute;n residida por el ministro de Producci&oacute;n y Trabajo de la Naci&oacute;n, Dante Sica, en la sede ministerial, los representantes de las c&aacute;maras empresarias metal&uacute;rgicas y los de UOM- tras extensas negociaciones- alcanzaron un Acuerdo Salarial 2019. </span></span></p>

<p style="margin-left:0cm; margin-right:0cm"><span style="font-size:14px"><span style="font-family:Arial,Helvetica,sans-serif">A manera de informaci&oacute;n avanzada: </span></span></p>

<p style="margin-left:0cm; margin-right:0cm"><span style="font-size:14px"><span style="font-family:Arial,Helvetica,sans-serif">a) Se otorg&oacute; un incremento del 30% total sobre los salarios de marzo, en tres tramos: abril, julio y octubre de 2019</span></span></p>

<p style="margin-left:0cm; margin-right:0cm"><span style="font-size:14px"><span style="font-family:Arial,Helvetica,sans-serif">b) Se fija una Gratificaci&oacute;n Extraordinaria de $ 12000 (pesos doce mil) a pagar en 6 cuotas iguales de $ 2000 (pesos dos mil) cada una, en mayo, junio, agosto setiembre, noviembre y diciembre 2019</span></span></p>

<p style="margin-left:0cm; margin-right:0cm"><span style="font-size:14px"><span style="font-family:Arial,Helvetica,sans-serif">c) Se incrementa el valor del Ingreso M&iacute;nimo Global de Referencia a $ 22243 a partir del 1&ordm; de abril de 2019</span></span></p>

<p style="margin-left:0cm; margin-right:0cm"><span style="font-size:14px"><span style="font-family:Arial,Helvetica,sans-serif">d) Se establece una cl&aacute;usula de revisi&oacute;n del Acuerdo con fecha noviembre de 2019, que puede anticiparse en el supuesto que la evoluci&oacute;n del &Iacute;ndice de Precios al Consumidor supere el porcentaje de 27%</span></span></p>

<p style="margin-left:0cm; margin-right:0cm"><span style="font-size:14px"><span style="font-family:Arial,Helvetica,sans-serif">e) El Acuerdo firmado tendr&aacute; vigencia entre el 1 de abril de 2019 y el 31 de marzo de 2020.</span></span></p>

<p style="margin-left:0cm; margin-right:0cm"><span style="font-size:14px"><span style="font-family:Arial,Helvetica,sans-serif">Las planillas respectivas deber&aacute;n ser confeccionadas y revisadas por las partes en los pr&oacute;ximos d&iacute;as de manera que est&eacute;n disponibles para la liquidaci&oacute;n en la segunda quincena de mayo.</span></span></p>

<p style="margin-left:0cm; margin-right:0cm"><span style="font-size:14px"><span style="font-family:Arial,Helvetica,sans-serif">Cabe consignar adem&aacute;s que CAMIMA, as&iacute; como otra c&aacute;mara colega, suscribi&oacute; el acuerdo &ldquo;ad refer&eacute;ndum de su aceptaci&oacute;n por parte de sus &oacute;rganos directivos&rdquo;, con el objetivo de revisar y procurar mejorar algunos aspectos del acuerdo, sin que ello implique afectar los lineamientos b&aacute;sicos expuestos en los puntos anteriores.</span></span></p>
',
    'breve' => '<p><span style="font-size:16px"><span style="font-family:Arial,Helvetica,sans-serif">El lunes 20 de mayo a &uacute;ltima hora, en una reuni&oacute;n residida por el ministro de Producci&oacute;n y Trabajo de la Naci&oacute;n, Dante Sica, en la sede ministerial, los representantes de las c&aacute;maras empresarias metal&uacute;rgicas y los de UOM- tras extensas negociaciones- alcanzaron un Acuerdo Salarial 2019.</span></span></p>
',
    'ruta' => 'ofertas_97.jpg?99',
    'habilitado' => 1,
    'portada' => 1,
    'orden' => '',
    'pdf' => '',
    'otros' => NULL,
    'image' => NULL,
    'category_id' => 3,
    'created_at' => NULL,
    'updated_at' => NULL,
),
66 => 
array (
    'id' => 98,
    'titulo' => 'CAMIMA respalda la No Obligatoriedad de la Contribución del 1%',
'descripcion' => '<p style="margin-left:0cm; margin-right:0cm"><span style="font-size:14px"><span style="font-family:Arial,Helvetica,sans-serif">La C&aacute;mara de la Peque&ntilde;a y Mediana Industria Metal&uacute;rgica Argentina (CAMIMA) destac&oacute; hoy la resoluci&oacute;n 649 de la Secretar&iacute;a de Trabajo de la Naci&oacute;n que, ante un pedido de la Asociaci&oacute;n de F&aacute;bricas Argentinas de Componentes (AFAC), determin&oacute; que &ldquo;los empresarios de la actividad referida a&uacute;n no afiliados a ADIMRA, no se encuentran obligados a pagar una contribuci&oacute;n a dicha entidad, firmante del convenio colectivo&rdquo;.</span></span></p>

<p style="margin-left:0cm; margin-right:0cm"><span style="font-size:14px"><span style="font-family:Arial,Helvetica,sans-serif">Recordamos con relaci&oacute;n a esta contribuci&oacute;n que CAMIMA cuenta desde hace varios a&ntilde;os con una Resoluci&oacute;n del Ministerio eximiendo del pago de esa contribuci&oacute;n a sus empresas metal&uacute;rgicas asociadas, que pertenecen a las distintas ramas de la actividad. </span></span></p>

<p style="margin-left:0cm; margin-right:0cm"><span style="font-size:14px"><span style="font-family:Arial,Helvetica,sans-serif">CAMIMA &nbsp;ha sostenido siempre que esa contribuci&oacute;n no es obligatoria para las empresas metal&uacute;rgicas en general. </span></span></p>

<p style="margin-left:0cm; margin-right:0cm"><span style="font-size:14px"><span style="font-family:Arial,Helvetica,sans-serif">&ldquo;Las empresas metal&uacute;rgicas, del rubro que sean y dentro del marco legal vigente, est&aacute;n exentas de ese aporte compulsivo, salvo aquellas voluntariamente asociadas a ADMIRA&rdquo; se&ntilde;al&oacute; Jos&eacute; Luis Ammaturo, presidente de CAMIMA.</span></span></p>
',
'breve' => '<p style="margin-left:0cm; margin-right:0cm"><span style="font-size:16px"><span style="font-family:Arial,Helvetica,sans-serif">La C&aacute;mara de la Peque&ntilde;a y Mediana Industria Metal&uacute;rgica Argentina (CAMIMA) destac&oacute; la resoluci&oacute;n 649 de la Secretar&iacute;a de Trabajo de la Naci&oacute;n que, ante un pedido de la Asociaci&oacute;n de F&aacute;bricas Argentinas de Componentes (AFAC), determin&oacute; que &ldquo;los empresarios de la actividad referida a&uacute;n no afiliados a ADIMRA, no se encuentran obligados a pagar una contribuci&oacute;n a dicha entidad, firmante del convenio colectivo&rdquo;.</span></span></p>
',
    'ruta' => 'ofertas_98.jpg?89',
    'habilitado' => 1,
    'portada' => 1,
    'orden' => '',
    'pdf' => '',
    'otros' => NULL,
    'image' => NULL,
    'category_id' => 3,
    'created_at' => NULL,
    'updated_at' => NULL,
),
));
        
        
    }
}