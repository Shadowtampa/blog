<style>
    /* p,
  h2,
  h5 {
    padding: 1px;
  } */



    h2 {
        padding-top: 50px;
        margin-left: 5rem;
        /* width: 50%; */
        text-align: left;
    }

    #name {
        color: #2D9CDB;
    }

    #main_menu {
        width: 67.36%;
        margin-left: 18rem;
    }

    #main_menu_content {
        margin-right: 1rem;
        text-align: justify;
        text-justify: inter-word;
    }

    .float-container {
        padding: 20px;
    }

    .float-child,
    .float-child2 {
        width: 50%;
        float: left;
        padding: 20px;
    }

    #float_child_2_img {
        width: 50%;
        width: 300px;
        height: 300px;
    }
</style>

<div id="main_menu">
    <div class="float-container">

        <div class="float-child">
            <h2>Oi! Sou <span id="name">Luis Gomes</span>, Programador Full Stack!</h2>

        </div>

        <div class="float-child 2">
            <img id="float_child_2_img" src="{{URL::asset('/images/1601845465217-removebg-preview.png')}}">
        </div>

    </div>
    <p id="main_menu_content">Sou programador web, com experiência em frameworks PHP, python e Javascript, tanto em backend como em frontend. Utilizo a biblioteca PHPUnit para testes unitários. Meus interesses circundam a constante evolução em programação web e inserção no mercado de Data Science. Atualmente busco uma oportunidade no mercado de trabalho. Obrigado por ter lido minha descrição, me manda uma DM caso tenha dúvidas! ❤ </p>
</div>