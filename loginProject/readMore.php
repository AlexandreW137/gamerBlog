<?php 
require_once("header.php");
require_once("controller/autenticationController.php");
require_once("postArray.php");
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
                <img src="<?php echo $blogPost['img']; ?>" alt="">
                <h2 class="blog-post-title"><?php echo $blogPost['title']; ?></h2>
                <p class="blog-post-meta"><?php echo $blogPost['date']; ?> por <a href="#"><?php echo $blogPost['author']; ?></a></p>
                <p><?php echo $blogPost['content']['p1']; ?></p>
                <hr>
                <p><?php echo $blogPost['content']['p2']; ?></p>
                <blockquote>
                    <p><?php echo $blogPost['content']['blockquote']; ?></p>
                </blockquote>
                <p><?php echo $blogPost['content']['p3']; ?></p>
                <h3><?php echo $blogPost['content']['h3']; ?></h3>
                <p><?php echo $blogPost['content']['p4']; ?></p>
                <pre><code><?php echo $blogPost['content']['pre']; ?></code></pre>
                <p><?php echo $blogPost['content']['p5']; ?></p>
            </div>
        </div>
    </div>
</div>

<?php require_once("footer.php"); ?>