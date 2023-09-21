<?php 
require_once("header.php");
?>

<style>
.center {
    margin-bottom: 4rem;
    padding-bottom: 2rem;
    border-bottom: .05rem solid #e5e5e5;
    color: white;
    display: flex;
    flex-direction: column;
    align-items: center;
}

.blog-post-title {
    margin-bottom: .25rem;
    font-size: 2.5rem;
}

.blog-post-meta {
    margin-bottom: 1.25rem;
    color: #999;
}

.blog-post img {
    margin-bottom: 1.25rem;
}

.blog-post > p {
    margin-bottom: 1.25rem;
    color: #999;
    font-size: 1.25rem;
    line-height: 1.5;
}

.blog-post > p > a {
    color: #007bff;
}

.blog-post > h2 {
    margin-bottom: .75rem;
    font-size: 2rem;
}

.blog-post img {
    max-height: 300px;
    width: 100%;
    margin-top: 30px;
}

.blog-post > blockquote {
    margin: 0 0 1.25rem;
    padding: .75rem 1.25rem;
    font-size: 1.25rem;
    border-left: .25rem solid #eceeef;
}

.blog-post > blockquote > p:last-child {
    margin-bottom: 0;
}

.blog-post > ol,
.blog-post > ul {
    margin-bottom: 1.25rem;
}

.blog-post > ol ol,
.blog-post > ul ul,
.blog-post > ol ul,
.blog-post > ul ol {
    margin-bottom: 0;
}
</style>

<div class="container-fluid ">
    <div class="row center">
        <div class="col-sm-8 blog-main ">
            <div class="blog-post">
                <img src="img/tecnologia.jpg" alt="">
                <h2 class="blog-post-title">As últimas tendências em tecnologia</h2>
                <p class="blog-post-meta">Setembro 20, 2023 por <a href="#">Tech Expert</a></p>
                <p>A tecnologia está em constante evolução e neste blog post, exploraremos as últimas tendências que estão moldando o mundo da tecnologia. Desde inteligência artificial até realidade virtual e 5G, descubra como essas inovações estão impactando nossas vidas e o futuro da indústria de tecnologia.</p>
                <hr>
                <p>Curabitur blandit tempus porttitor. <strong>Nullam quis risus eget urna mollis</strong> ornare vel eu leo. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                <blockquote>
                    <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
                </blockquote>
                <p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                <h3>As vantagens da inteligência artificial</h3>
                <p>A inteligência artificial está revolucionando a maneira como interagimos com a tecnologia. Descubra como a IA está sendo usada em setores como saúde, automação e transporte, e como isso está mudando nossas vidas.</p>
                <pre><code>Exemplo de código de IA:</code></pre>
                <p>Aenean lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
            </div>
        </div>
    </div>
</div>

<?php require_once("footer.php"); ?>
