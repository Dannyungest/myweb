<?php include_once './header.php'; ?>
<section class="videobg">
    <video src="video/bgVideo.mp4" type="video/mp4" autoplay loop muted></video>
    <div>
        <h1>Nature at a Glance</h1>
        <h2>Want to know more</h2>
        <a href="#">Get Started</a>
    </div>

</section>

<h1>Basic Code PHP</h1>
<?php include "./footer.php"; ?>


<style>
    .videobg{
        width: 100%;
        height: 90vh;
        background-color: #1d1e1dcc;
        display: flex;
        align-items: center;
        justify-content: center;
        box-sizing: border-box;
        overflow: hidden;
    }
    .videobg video{
        position: absolute;
        right: 0;
        bottom: 0;
        z-index: -1;
    }
    .videobg div h1, .videobg div h2, .videobg div a{
        text-align: center;
        color: #fcfcfc;
    }
    .videobg div h1{
        font-size: 60px;
        font-weight: 500;
    }
    .videobg div h2{
        margin-bottom: 39px;
        font-size: 34px;
        font-weight: 200;
    }
    .videobg div a{
        display: block;
        margin: o auto;
        width: 13em;
        border: #effffc 2px solid;
        padding: 15px;
        border-radius: 48px;
        font-size: 20px;
        font-weight: 400;
        text-decoration: none;
        transition: .5s;
    }
    .videobg div a:hover{
        cursor: pointer;
        background-color: #0b231b;
        color: #0dffcf;
    }
    @media (max-width: 750px) {
        video{
            width: auto;
            height: 100%;
        }
        .videobg div h1{
            font-size: 37px;
            font-weight: 500;
        }
        .videobg div h2{
            font-size: 20px;
            font-weight: 100;
        }
        .videobg div a{
            width: 8em;
            padding: 10px;
            font-size: 20px;
            font-weight: 400;
        }
    }
</style>