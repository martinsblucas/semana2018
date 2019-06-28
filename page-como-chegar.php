<?php
/*
Template Name: Como chegar (mapa)
*/
?>
<?php get_header(); ?>

	<main role="main" class="container">

      <section class="row">
    	<div class="col-0 col-lg-1"></div>
		<?php
        global $query_string;
		$loop = new WP_Query ($query_string);
		// The Loop
		if ( $loop->have_posts() ) {
			while ( $loop->have_posts() ) {
			$loop->the_post();
        ?>
        <div class="col-12 col-lg-10">
			<h1 class="titulo">Serviço</h1>
            <div class="row local">
            <article class="col-12 col-md-4">
          	<p><strong>CINE ARTE UFF</strong><br />
            R. Miguel de Frias, 9 - Icaraí, Niterói<br />
              Tel.: 3674-7515<br />
			Ingressos: R$10/ R$5
            </p>
            </article>
        	<div class="col-12 col-md-8"><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14701.099439979587!2d-43.1165843!3d-22.9032307!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x3811d4169bcaaf10!2sCentro+de+Artes+UFF!5e0!3m2!1spt-BR!2sbr!4v1541440032804" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe></div>
        </div>
        <div class="row local">
            <article class="col-12 col-md-4">
          	<p><strong>ESTAÇÃO NET BOTAFOGO</strong><br />
R. Voluntários da Pátria, 88 - Botafogo, Rio de Janeiro<br />
Tel.: 2226-1988<br />
Ingressos: R$12/R$6<br />
Compre <a href="https://www.ingresso.com/rio-de-janeiro/home/" target="_blank">aqui</a> </p>
            </article>
        	<div class="col-12 col-md-8"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3673.972587640067!2d-43.186996385399375!3d-22.951236645227894!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x997feffbfd6447%3A0x95dea10c9b0c8e3f!2sEsta%C3%A7%C3%A3o+NET+Botafogo!5e0!3m2!1spt-BR!2sbr!4v1541440476869" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe></div>
        </div>
        <div class="row local">
          <article class="col-12 col-md-4">
          	<p><strong>UFRJ - DEPARTAMENTO DE LETRAS - FUNDÃO</strong><br />
Av. Horácio Macedo, 2151 -
Cidade Universitária, Rio de Janeiro<br />
Tel.: 3938-9750<br />
Ingressos gratuitos
          	</p>
            </article>
        	<div class="col-12 col-md-8"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3676.4383015181425!2d-43.227486685401566!3d-22.86026184195894!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x99793af4063fa1%3A0x87a5ea6ae5289014!2sUFRJ+-+Faculdade+de+Letras!5e0!3m2!1spt-BR!2sbr!4v1541440708067" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe></div>
        </div>
        <div class="row local">
          <article class="col-12 col-md-4">
          	<p><strong>SESC MADUREIRA</strong><br />
R. Ewbank da Câmara, 90 - Madureira, Rio de Janeiro<br />
Tel.: 3350-8055<br />
Ingressos gratuitos
          	</p>
            </article>
        	<div class="col-12 col-md-8"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3676.0039700547322!2d-43.3445033854011!3d-22.876311742534735!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9962dbadd79289%3A0x63353b11e311e13d!2sSesc+Madureira!5e0!3m2!1spt-BR!2sbr!4v1541440791222" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe></div>
        </div>
                <div class="row local">
          <article class="col-12 col-md-4">
          	<p><strong>UFRJ - DEPARTAMENTO DE LETRAS - FUNDÃO</strong><br />
Av. Horácio Macedo, 2151 -
Cidade Universitária, Rio de Janeiro<br />
Tel.: 3938-9750<br />
Ingressos gratuitos
          	</p>
            </article>
        	<div class="col-12 col-md-8"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3676.4383015181425!2d-43.227486685401566!3d-22.86026184195894!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x99793af4063fa1%3A0x87a5ea6ae5289014!2sUFRJ+-+Faculdade+de+Letras!5e0!3m2!1spt-BR!2sbr!4v1541440708067" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe></div>
        </div>
        <div class="row local">
          <article class="col-12 col-md-4">
          	<p><strong>SESC NOVA IGUAÇU</strong><br />
Rua Dom Adriano Hipolito, 10 - Moquetá, Nova Iguaçu<br />
Tel.: 2797-3001<br />
Ingressos gratuitos
          	</p>
            </article>
        	<div class="col-12 col-md-8"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3679.527696481656!2d-43.451919485404396!3d-22.74578983786358!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9967b232b8260b%3A0x46480c0b0fee7fcd!2sSesc+Nova+Igua%C3%A7u!5e0!3m2!1spt-BR!2sbr!4v1541440850972" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe></div>
        </div>
       <div class="row local">
          <article class="col-12 col-md-4">
          	<p><strong>SESC SÃO GONÇALO</strong><br />
Av. Pres. Kennedy, 755 -
Estrela do Norte, São Gonçalo<br />
Tel.: 2712-3282<br />
Ingressos gratuitos
          	</p>
            </article>
        	<div class="col-12 col-md-8"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3677.5366564468713!2d-43.04086108540262!3d-22.819626540502792!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x999a8acb15635f%3A0x581ee7381b96847e!2zU2VzYyBTw6NvIEdvbsOnYWxv!5e0!3m2!1spt-BR!2sbr!4v1541440924275" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe></div>
        </div>
          <div class="row local">
          <article class="col-12 col-md-4">
          	<p><strong>SESC SÃO JOÃO DE MERITI</strong><br />
Av. Automóvel Clube, 66 -
Centro, São João de Meriti<br />
Tel.: 2755-7070<br />
Ingressos gratuitos
          	</p>
            </article>
        	<div class="col-12 col-md-8"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3677.9526526073723!2d-43.36898618540289!3d-22.80421823995138!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x99646028b4fd5d%3A0x884283a294c4efe9!2sSesc+S%C3%A3o+Jo%C3%A3o+de+Meriti!5e0!3m2!1spt-BR!2sbr!4v1541441024068" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe></div>
        </div>
          <div class="row local">
          <article class="col-12 col-md-4">
          	<p><strong>SESC TIJUCA</strong><br />
R. Barão de Mesquita, 539 -
Andarai, Rio de Janeiro<br />
Tel.: 3238-2139<br />
Ingressos gratuitos
          	</p>
            </article>
        	<div class="col-12 col-md-8"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3674.6934621739415!2d-43.243896185399954!3d-22.92467464427217!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x997e0d9f408217%3A0x9f72a96c56d23676!2sSesc+Tijuca!5e0!3m2!1spt-BR!2sbr!4v1541441076607" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe></div>
        </div>
          <div class="row local">
          <article class="col-12 col-md-4">
          	<p><strong>CINECLUBE MATE COM ANGU</strong><br />
Goméia Galpão Criativo -
Rua Dr. Lauro Neiva, 32 -
Duque deCaxias, Rio de Janeiro<br />
Tel.: 25270-540<br />
Ingressos gratuitos
          	</p>
            </article>
        	<div class="col-12 col-md-8"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3678.262637387418!2d-43.31036248540326!3d-22.792730139540478!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x997ae9afc40095%3A0x5ec93666af2c38eb!2sGomeia+-+Galp%C3%A3o+Criativo!5e0!3m2!1spt-BR!2sbr!4v1541441308630" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe></div>
        </div>
          <div class="row local">
          <article class="col-12 col-md-4">
          	<p><strong>FAVELA CINECLUBE</strong><br />
Nabuco De Freitas, 20 -
Santo Cristo, Rio de Janeiro<br />
Tel.: 2022-0660<br />
Ingressos gratuitos
          	</p>
            </article>
        	<div class="col-12 col-md-8"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3675.251874525362!2d-43.20075408540039!3d-22.90407884353178!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x997f140c0b90e7%3A0x946a331da44ffc2b!2sR.+Nabuco+de+Freitas%2C+20+-+Santo+Cristo%2C+Rio+de+Janeiro+-+RJ!5e0!3m2!1spt-BR!2sbr!4v1541441344867" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe></div>
        </div>
          <div class="row local">
          <article class="col-12 col-md-4">
          	<p><strong>CINECLUBE IMBARIÊ NOS TRILHOS</strong><br />
       	    Casa Brasil Imbariê<br />
          	Av Coronel Sisson, lt 15 e 16, qd 2, Imbariê - Duque de Caxias, Rio de Janeiro<br />
Ingressos gratuitos</p>
</article>
        	<div class="col-12 col-md-8"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29460.8639156265!2d-43.22910479305281!3d-22.631109388417332!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x990b2cf420e2f5%3A0xb80198926029fcb3!2zUHJhw6dhIGRlIEltYmFyacOq!5e0!3m2!1spt-BR!2sbr!4v1541463365698" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe></div>
        </div>
          <div class="row local">
          <article class="col-12 col-md-4">
          	<p><strong>NA FAVELA CINECLUBE</strong><br />
Vila Pinheiro (pagode da C11) - Complexo da Maré, Rio de Janeiro<br />
Ingressos gratuitos
          	</p>
            </article>
        	<div class="col-12 col-md-8"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3676.237608891191!2d-43.240685391233356!3d-22.867679384562788!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x997eb310c8750d%3A0x14a177e6128d7be1!2sLanchonete+e+pizzaria!5e0!3m2!1spt-BR!2sbr!4v1541441901700" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe></div>
        </div>
        </div>
        <?php	}
        } else {
        // no posts found
        }
        /* Restore original Post Data */
        wp_reset_postdata();
        ?>
        <div class="col-0 col-lg-1"></div>
      </section>
    </main>
<?php get_footer(); ?>