<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NoticiasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('noticias')->insert([
            'date' => '2018-06-01 00:00:00',
            'title' => 'Nueva alternativa de financiación para las Pymes',
            'subtitle' => 'Nueva alternativa de financiación para las Pymes',
            'content' => '<p>Es una herramienta ágil y flexible que permite a las Pymes obtener financiación, a través del mercado de capitales, emitiendo deuda hasta 60 meses, en pesos o USD a tasas competitivas de mercado.</p><p>Durante el 2017 asistimos a más de 400 Pymes, financiándolas con cheques, pagarés de pago diferido y bancos.</p><p>Desde Aval Rural acompañamos a Pymes en todo el país y de todos los sectores de la economía con el objetivo de consolidar y potenciar su crecimiento.</p><p>Si desea contactarse con Aval Rural, llamar al (011) 4468-8291 o enviar mail a <a href="http://info@avalrural.com.ar" target="_blank">info@avalrural.com.ar</a> y <a href="http://jsalate@avalrural.com.ar" target="_blank">jsalate@avalrural.com.ar</a></p>',
            'img_miniature' => '',
            'img_noticia' => '',
            'modified_by' => '',
            'created_at' => '2018-06-01 00:00:00',
            'updated_at' => '2018-06-01 00:00:00',
            'slug' => 'Nueva-alternativa-de-financiación-para-las-Pymes'
        ]);
        DB::table('noticias')->insert([
            'date' => '2018-06-01 00:00:00',
            'title' => 'Educación financiera - Instructivos MiPyME',
            'subtitle' => 'La CASFOG propone, a través de videos instructivos, explicar el funcionamiento del Sistema de Garantías de Argentina y los productos',
            'content' => '<p>De esta manera, y en coherencia con la visión institucional de desarrollar, potenciar y fortalecer la inclusión financiera de las</p><p>Te invitamos a conocer el primer video instructivo sobre Obligaciones Negociables Simples.</p><p><a href="https://www.youtube.com/watch?v=7IcB8aOIP9U&amp;t=7s" target="_blank">Ver Video</a><br></p>',
            'img_miniature' => '',
            'img_noticia' => '',
            'modified_by' => '',
            'created_at' => '2018-06-01 00:00:00',
            'updated_at' => '2018-06-01 00:00:00',
            'slug' => 'Educación-financiera---Instructivos-MiPyME'
        ]);
        DB::table('noticias')->insert([
            'date' => '2018-06-01 00:00:00',
            'title' => 'Financiación PyME para la campaña fina 2018 - Aval',
            'subtitle' => '2018-06-01',
            'content' => '<p>Bancos en USD: Tasas anuales de interés desde 4% anual a 180 días y 360 días;</p><p>Descuento de cheques $: Tasa de interés vencida 25% anual hasta 360 días;</p><p>Pagaré Bursátil USD: Financiación en dólares hasta 360 días, tasa de interés 8,5% anual.</p><p>Adicionalmente, se pueden financiar compras de maquinaria o inversiones con créditos hasta 60 meses.</p><h6>Requisitos para asociarse:</h6><p>Para asociarse a AVAL RURAL es necesario ser considerado micro, pequeña o mediana empresa en los términos definidos por la Subsecretaría de Financiamiento de la Producción, es decir, tener un promedio de los últimos 3 años de ventas anuales de hasta:</p><p>$ 230.000.000 + IVA, para empresas agropecuarias (ej. productores)</p><p>$ 250.000.000 + IVA, para empresas de servicios (ej. contratistas)</p><p>$ 760.000.000 + IVA, para empresas industriales (ej. formulación de biodiesel)</p><p>$ 900.000.000 + IVA, para comercios (ej. acopios y agronomías)</p><p>Debe tener regularizada la situación impositiva y previsional y estar en situación normal en el sistema financiero.</p><p><br></p><h6>Para mayor información contactarse con su responsable zonal:</h6><p>- Mariano García (Corrientes, Entre Ríos, Santa Fe, NEA y Norte de Buenos Aires)</p><p>mgarcia@avalrural.com.ar (0341) 15-3384422</p><p>- Hernán Zapata (Centro, Sur y Noroeste Buenos Aires, NOA, Mendoza y San Juan)</p><p><a href="http://hzapata@avalrural.com.ar" target="_blank">hzapata@avalrural.com.ar</a> (011) 4468-8296 o (011)15-5888-1125</p><p>- Inés Bollón (Oeste de Buenos Aires, La Pampa y GBA Norte)</p><p><a href="http://ibollon@avalrural.com.ar" target="_blank">ibollon@avalrural.com.ar</a> (011) 4468-8174 o (011) 15-2721-1516</p><p>- Maximiliano Bustos Ferreyra (Córdoba y GBA Sur)</p><p><a href="http://mbustosferreyra@avalrural.com.ar" target="_blank">mbustosferreyra@avalrural.com.ar</a> (011) 4468-8293 o (011) 15-3789-2166</p><p>- Johanna Salate</p><p><a href="http://jsalate@avalrural.com.ar" target="_blank">jsalate@avalrural.com.ar</a> (011) 4468-8291</p>',
            'img_miniature' => '',
            'img_noticia' => '',
            'modified_by' => '',
            'created_at' => '2018-06-01 00:00:00',
            'updated_at' => '2018-06-01 00:00:00',
            'slug' => 'Financiación-PyME-para-la-campaña-fina-2018-Aval'
        ]);
        DB::table('noticias')->insert([
            'date' => '2018-06-01 00:00:00',
            'title' => 'Nueva Normativa 455-2018',
            'subtitle' => 'Salió la Resolución 455/2018 derogando la Resolución 212/2013, e introduciendo cambios a la normativa aplicable a las SGRs.',
            'content' => '<p>Pueden leer la norma completa del siguiente link:</p><p><a href="https://www.boletinoficial.gob.ar/#!DetalleNorma/188981/20180727" target="_blank">https://www.boletinoficial.gob.ar/#!DetalleNorma/188981/20180727</a><br></p>',
            'img_miniature' => '',
            'img_noticia' => '',
            'modified_by' => '',
            'created_at' => '2018-06-01 00:00:00',
            'updated_at' => '2018-06-01 00:00:00',
            'slug' => 'Nueva-Normativa-455-2018'
        ]);
        DB::table('noticias')->insert([
            'date' => '2019-05-01 00:00:00',
            'title' => 'Renovación del certificado PYME',
            'subtitle' => 'Hay tiempo hasta el 31 de mayo para las PyMEs que hayan cerrado el ejercicio fiscal en diciembre 2018 o enero 2019',
            'content' => '',
            'img_miniature' => '',
            'img_noticia' => '',
            'modified_by' => '',
            'created_at' => '2019-05-01 00:00:00',
            'updated_at' => '2019-05-01 00:00:00',
            'slug' => 'Renovación-del-certificado-PYME'
        ]);
        DB::table('noticias')->insert([
            'date' => '2019-06-03 00:00:00',
            'title' => 'Las pymes se financiaron en el mercado por un récord histórico durante mayo.',
            'subtitle' => 'DESCUENTO de CHEQUES de PAGO DIFERIDO/ PRESTAMOS en BANCOS – CORTO PLAZO (USD) DESCUENTO.',
            'content' => '<h6>Comerciales de Aval Rural por zona:</h6><p>Inés Bollón (Oeste de Buenos Aires, La Pampa, Sur de Córdoba)</p><p><a href="http://ibollon@avalrural.com.ar" target="_blank">ibollon@avalrural.com.ar</a>&nbsp;- (011) 4468-8174 o (011)15-27211516</p><p><br></p><p>Mariano García (Entre Ríos, Santa Fe, NEA y Norte de Buenos Aires)</p><p><a href="http://mgarcia@avalrural.com.ar" target="_blank">mgarcia@avalrural.com.ar</a>&nbsp;- (0341) 15-3384422</p><p><br></p><p>Hernán Zapata (Centro y Sur Buenos Aires, Norte de Córdoba, NOA)</p><p><a href="http://hzapata@avalrural.com.ar" target="_blank">hzapata@avalrural.com.ar</a>&nbsp;- - (011) 4468-8296 o (011)15-5888-1125</p><p><br></p><p>Paulo Marchetti (Córdoba)</p><p><a href="http://PMarchetti@avalrural.com.ar" target="_blank">PMarchetti@avalrural.com.ar</a> - (0341) 15-2107564</p>',
            'img_miniature' => '',
            'img_noticia' => '',
            'modified_by' => '',
            'created_at' => '2019-06-03 00:00:00',
            'updated_at' => '2019-06-03 00:00:00',
            'slug' => 'Las-pymes-se-financiaron-en-el-mercado-por-un-récord-histórico-durante-mayo'
        ]);
        DB::table('noticias')->insert([
            'date' => '2019-12-02 00:00:00',
            'title' => 'Condiciones Aval Rural Octubre 2019',
            'subtitle' => 'DESCUENTO de CHEQUES de PAGO DIFERIDO/ PRESTAMOS en BANCOS – CORTO PLAZO (USD) DESCUENTO.',
            'content' => '<h6>Comerciales de Aval Rural por zona:</h6><p>Inés Bollón (Oeste de Buenos Aires, La Pampa, Sur de Córdoba)</p><p><a href="http://ibollon@avalrural.com.ar" target="_blank">ibollon@avalrural.com.ar</a>&nbsp;- (011) 4468-8174 o (011)15-27211516</p><p><br></p><p>Mariano García (Entre Ríos, Santa Fe, NEA y Norte de Buenos Aires)</p><p><a href="http://mgarcia@avalrural.com.ar" target="_blank">mgarcia@avalrural.com.ar</a>&nbsp;- (0341) 15-3384422</p><p><br></p><p>Hernán Zapata (Centro y Sur Buenos Aires, Norte de Córdoba, NOA)</p><p><a href="http://hzapata@avalrural.com.ar" target="_blank">hzapata@avalrural.com.ar</a>&nbsp;- - (011) 4468-8296 o (011)15-5888-1125</p><p><br></p><p>Paulo Marchetti (Córdoba)</p><p><a href="http://PMarchetti@avalrural.com.ar" target="_blank">PMarchetti@avalrural.com.ar</a> - (0341) 15-2107564</p>',
            'img_miniature' => '',
            'img_noticia' => '',
            'modified_by' => '',
            'created_at' => '2019-12-02 00:00:00',
            'updated_at' => '2019-12-02 00:00:00',
            'slug' => 'Condiciones-Aval-Rural-Octubre-2019'
        ]);
        DB::table('noticias')->insert([
            'date' => '2019-12-02 00:00:00',
            'title' => 'Nuevos Límites PYME Resolución 563/2019',
            'subtitle' => 'El día 6 de diciembre se publicó en el B.O. la Resolución 563/2019',
            'content' => '<p>El día 6 de diciembre se publicó en el B.O. la Resolución 563/2019 de la Secretaría de Emprendedores y de la Pequeña y Mediana Empresa, modificatoria de la Resolución 220/2019, estableciendo nuevos topes de ventas totales para encuadrar a las empresas dentro de la categoría MiPyme. A partir de la citada norma, el cuadro de límites de facturación se modifica por el que sigue:<span style="white-space:pre">	</span></p><p>Estos montos entrarán en vigencia a partir del 11 de diciembre de 2019.</p><p>Para más información consulta:</p><p><a href="https://www.boletinoficial.gob.ar/detalleAviso/primera/223554/20191210" target="_blank">Aquí</a></p>',
            'img_miniature' => '',
            'img_noticia' => '',
            'modified_by' => '',
            'created_at' => '2019-12-02 00:00:00',
            'updated_at' => '2019-12-02 00:00:00',
            'slug' => 'Nuevos-Límites-PYME-Resolución-563-2019'
        ]);

    }
}

