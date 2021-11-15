<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>FINPRO - Encontre seu profissional</title>
        <!-- Favicon--> 
<!--        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" /> -->
        <link rel="icon" type="image/x-icon" href="assets/toolssolid.ico" /> 
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <!-- Ajax -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="#page-top"><i class="fas fa-tools"></i> Finpro</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ms-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link" href="#services">Sobre</a></li>
                        <li class="nav-item"><a class="nav-link" href="#portfolio">Oportunidades</a></li>
                        <li class="nav-item"><a class="nav-link" href="#about">Como funciona</a></li>
<!--                        <li class="nav-item"><a class="nav-link" href="#team">Team</a></li> -->
                        <li class="nav-item"><a class="nav-link" href="#contact">Cadastro</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container">
                <div class="masthead-subheading">Encontre seu profissional: <br> Conectando você com o que você precisa</div>
                <div class="masthead-heading text-uppercase">FINPRO</div>
                <a class="btn btn-primary btn-xl text-uppercase" href="#services">Conheça</a>
            </div>
        </header>
        <!-- Services-->
        <section class="page-section" id="services">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Sobre</h2>
                    <h3 class="section-subheading text-muted">O "Encontre seu profissional" é uma plataforma ideal para você, que possui um talento e está precisando de renda extra, e também para quem precisa de um serviço e não consegue encontrar um profissional para executá-lo.</h3>
                </div>
                <div class="row text-center">
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
<!--                            <i class="fas fa-shopping-cart fa-stack-1x fa-inverse"></i> -->
                            <i class="fas fa-solid fa-forward fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Rápido</h4>
                        <p class="text-muted">Com apenas alguns cliques, você já consegue se cadastrar e utilizar a plataforma</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
<!--                            <i class="fas fa-laptop fa-stack-1x fa-inverse"></i> -->
                            <i class="fas fa-solid fa-money-bill fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">100% Gratuito</h4>
                        <p class="text-muted">Não cobramos pela utilização do site. <br>Negocie valores diretamente com o prestador.</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
<!--                            <i class="fas fa-lock fa-stack-1x fa-inverse"></i> -->
                            <i class="fas fa-solid fa-dollar-sign fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Renda Extra</h4>
                        <p class="text-muted">Aproveite para conseguir renda extra e ajudar quem precisa do seu serviço.</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Portfolio Grid-->
        <section class="page-section bg-light" id="portfolio">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Oportunidades</h2>
                    <h3 class="section-subheading text-muted">Aqui você encontra os profissionais certos para o seu trabalho</h3>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 1-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal1" onclick="getInfo()">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/portfolio/informatica.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Informática</div>
                                <div class="portfolio-caption-subheading text-muted">PC, notebook, celular, tablet e mais</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 2-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal2" onclick="getConstr()">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/portfolio/construcao-civil.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Construção Civil</div>
                                <div class="portfolio-caption-subheading text-muted">Pedreiro, encanador, eletricista, telhadista e mais</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 3-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal3" onclick="getAuto()">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/portfolio/automotivo.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Automotivo</div>
                                <div class="portfolio-caption-subheading text-muted">Mecânico, funileiro, instalador de som e mais</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                        <!-- Portfolio item 4-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal4" onclick="getEletrodom()">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/portfolio/eletrodomesticos2.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Eletrodomésticos</div>
                                <div class="portfolio-caption-subheading text-muted">Geladeira, fogão, máquina de lavar e mais</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-sm-0">
                        <!-- Portfolio item 5-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal5" onclick="getEletropor()">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/portfolio/eletroportateis.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Eletroportáteis</div>
                                <div class="portfolio-caption-subheading text-muted">Liquidificador, batedeira, micro-ondas e mais</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <!-- Portfolio item 6-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal6" onclick="getTrans()">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/portfolio/transportes.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Transportes</div>
                                <div class="portfolio-caption-subheading text-muted">Motorista, motoboy, carreto, frete e muito mais</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                        <!-- Portfolio item 7-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal7" onclick="getAll()">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/portfolio/naoEncontrou.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Não encontrou?</div>
                                <div class="portfolio-caption-subheading text-muted">Pesquise entre todos os profissionais cadastrados</div>
                            </div>
                        </div>
                    </div>    
                </div>
            </div>
        </section>
        <!-- About-->
        <section class="page-section" id="about">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Como funciona</h2>
                    <h3 class="section-subheading text-muted">Veja como é fácil: Em apenas alguns passos, você já estará conectado com o seu próximo prestador.</h3>
                </div>
                <ul class="timeline">
                    <li>
                        <div class="timeline-image">
                            <!-- <i class="fas fa-solid fa-sign-in-alt  fa-inverse fa-stack-2x "></i> -->    
                            <img class="rounded-circle img-fluid" src="assets/img/about/1.jpg" alt="..." />
                            <!-- <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-solid fa-user-alt fa-stack-1x fa-inverse"></i>
                            </span> -->
                        </div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>1ª etapa</h4>
                                <h4 class="subheading">Informe o seu perfil</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Informe se você irá prestar serviço ou se está em busca de um profissional.</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image">
                            <img class="rounded-circle img-fluid" src="assets/img/about/2.jpg" alt="..." />
                            <!-- <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-solid fa-keyboard fa-stack-1x fa-inverse"></i> -->
                        </div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>2ª etapa</h4>
                                <h4 class="subheading">Cadastre-se</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Na opção "Cadastro", basta inserir o seu nome, celular, e-mail. Se você é prestador, selecione a área de atuação e nos conte um pouco sobre suas habilidades. <br>Agora só clicar em cadastrar e pronto! O seu cadastro já está feito!</p></div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-image">
                            <img class="rounded-circle img-fluid" src="assets/img/about/3.jpg" alt="..." />
                            <!-- <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-solid fa-search fa-stack-1x fa-inverse"></i> -->
                        </div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>3ª etapa</h4>
                                <h4 class="subheading">Encontre seu profissional</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Basta acessar a sessão "Oportunidades" e selecionar o tipo de serviço, e você já terá acesso aos profissionais cadastrados para o tipo de serviço</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image">
                            <img class="rounded-circle img-fluid" src="assets/img/about/4.jpg" alt="..." />
                            <!-- <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-solid fa-mobile fa-stack-1x fa-inverse"></i> -->
                        </div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>4ª etapa</h4>
                                <h4 class="subheading">Deu match? Entre em contato</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Se você gostou do profissional, basta clicar no botão "Contato" que o telefone será exibido, e você poderá negociar direto com o prestador</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted"><a class="nav-link" href="#contact">
                        <div class="timeline-image">
                            <h4>
                                Quero
                                <br />
                                me
                                <br />
                                Cadastrar!
                            </h4>
                        </div>
                    </li>
                </ul>
            </div>
        </section>

        <!-- Contact-->
        <section class="page-section" id="contact">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Cadastre-se</h2>
<!--                     <h3 class="section-subheading text-muted">Faça o seu cadastro e conecte-se com pessoas da sua região que precisam do seu trabalho</h3> -->
                    <h3 class="section-subheading text-muted">Faça o seu cadastro e conecte-se com pessoas da sua região.</h3>
                </div>
                
                <!-- * * * * * * * * * * * * * * *-->
                <!-- * * SB Forms Contact Form * *-->
                <!-- * * * * * * * * * * * * * * *-->
                <!-- This form is pre-integrated with SB Forms.-->
                <!-- To make this form functional, sign up at-->
                <!-- https://startbootstrap.com/solution/contact-forms-->
                <!-- to get an API token!-->
                <form id="cadastroForm">
                    <div class="row align-items-stretch mb-5">
                        <div class="col-md-6 text-center">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#modalCadastroCliente">
                                <button class="btn btn-primary btn-xl text-uppercase" type="button">
                                    Sou Cliente
                                </button>
                            </a>
                        </div>
                        <div class="col-md-6 text-center">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#modalCadastroPrestador">
                                <button class="btn btn-primary btn-xl text-uppercase"  type="button">
                                    Sou Prestador
                                </button>
                            </a>
                        </div>
                    </div>
                    <!-- Submit success message-->
                    <!---->
                    <!-- This is what your users will see when the form-->
                    <!-- has successfully submitted-->
                    <div class="text-center">
<!--                     <h2 class="section-heading text-uppercase">Cadastre-se</h2> -->
                    <h3 class="section-subheading text-muted">Já é cadastrado? Faça o seu <a class="portfolio-link" data-bs-toggle="modal" href="#modalLogin">login</a>.</h3>
                    </div>
                    <div class="d-none" id="submitSuccessMessage">
                        <div class="text-center text-white mb-3">
                            <div class="fw-bolder">Form submission successful!</div>
                            To activate this form, sign up at
                            <br />
                            <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                        </div>
                    </div>
                    <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
<!--                     <div class="text-center"><button class="btn btn-primary btn-xl text-uppercase disabled" id="submitButton" type="submit">Cadastrar</button></div> -->
                </form>
            </div>
        </section>
        <!-- Footer-->
        <footer class="footer py-4">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 text-lg-start">Copyright &copy; PI Grupo 1 - CEU Quinta do sol - 2021</div>
                    <div class="col-lg-4 my-3 my-lg-0">
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                    <div class="col-lg-4 text-lg-end">
                        <a class="link-dark text-decoration-none me-3" href="#!">Privacy Policy</a>
                        <a class="link-dark text-decoration-none" href="#!">Termos de uso</a>
                    </div>
                </div>
            </div>
        </footer>
    
        </script>
        <!-- Portfolio Modals-->
        <!-- Portfolio item 1 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Informática</h2>
                                    
                                    <p class="item-intro text-muted">Aqui você encontra profissionais na área de informática e tecnologia</p>
                                    <div class="container px-4 px-lg-5 mt-5">
                                        <div id="informatica" class="row gx-3 gx-lg-4 row-cols-2 row-cols-md-3 row-cols-xl-2 justify-content-center">        
                                            <script type="text/javascript">
                                                function getInfo() {

                                                    $.ajax({
                                                        dataType:"json",
                                                        url:"getInfo.php", 
                                                        type: "GET",
                                                        success:function(result){

                                                            if (result.mensagem == "Nenhum prestador encontrado") {
                                                                `
                                                                <div>
                                                                    ${document.getElementById("informatica").innerHTML = result.mensagem }
                                                                </div>
                                                                `

                                                            } else {

                                                                console.log(result.mensagem);
                                                                retornoObj = JSON.stringify(result);
                                                                retornoTxt = JSON.parse(retornoObj);
                                                                cliArray = retornoTxt.body;
                                                                console.log(cliArray);
                                                                varInfo = "";
                                                                cont = 0;
                                                                
                                                                for(let i in cliArray) {
                                                                    
                                                                        varInfo += `<div class="col mb-1">
                                                                                        <div class="card h-100">
                                                                                            <div class="card-body p-3">
                                                                                                <div class="text-center">
                                                                                                    
                                                                                                    <h5 class="fw-bolder">${cliArray[i]['nome']}</h5>
                                                                                                    <p class="card-text">${cliArray[i]['desc_serv']}</p>
                                                                                                    <p class="card-text">Telefone: ${cliArray[i]['telefone']}</p>
                                                                                                    <p class="card-text"> Celular: ${cliArray[i]['celular']}</p>

                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    `;
                                                                        
                                                                }
                                                                
/*                                                                 `
                                                                <div class="col mb-5">
                                                                ${document.getElementById("informatica").innerHTML = varInfo}
                                                                </div>
                                                                `; */
                                                                document.getElementById("informatica").innerHTML = varInfo;
                                                            }
                                                        }
                                                    });
                                                }
                                            </script>
                                        </div>
                                    </div>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-times me-1"></i>
                                        Fechar
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 2 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Construção Civil</h2>
                                    <p class="item-intro text-muted">Aqui você encontra profissionais da área de construção civil.</p>
                                    <div id="construcao">        
                                        <script type="text/javascript">
                                            function getConstr() {

                                                $.ajax({
                                                    dataType:"json",
                                                    url:"getConstr.php", 
                                                    type: "GET",
                                                    success:function(result){

                                                        if (result.mensagem == "Nenhum prestador encontrado") {
                                                            `
                                                            <div>
                                                                ${document.getElementById("construcao").innerHTML = result.mensagem }
                                                            </div>
                                                            `

                                                        } else {

                                                            console.log(result.mensagem);
                                                            retornoObj = JSON.stringify(result);
                                                            retornoTxt = JSON.parse(retornoObj);
                                                            cliArray = retornoTxt.body;
                                                            console.log(cliArray);
                                                            varConstr = "";
                                                            
                                                            for(let i in cliArray) {
                                                                varConstr += `<div class="col-sm-6">
                                                                                <div class="card" style="width: 18rem;">
                                                                                    <div class="card-body">
                                                                                        <h5 class="card-title">${cliArray[i]['nome']}</h5>
                                                                                        <p class="card-text">${cliArray[i]['desc_serv']}</p>
                                                                                        <a href="#" class="btn btn-primary">Ver telefone</a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            `;
                                                            }
                                                            `
                                                            <div class="row">
                                                            ${document.getElementById("construcao").innerHTML = varConstr}
                                                            </div>
                                                            `;
                                                        }
                                                    }
                                                });
                                            }
                                        </script>
                                    </div>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-times me-1"></i>
                                        Fechar
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 3 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Automotivo</h2>
                                    <p class="item-intro text-muted">Aqui você encontra os profissionais da área automotiva.</p>
                                    <div id="automotivo">        
                                        <script type="text/javascript">
                                            function getAuto() {

                                                $.ajax({
                                                    dataType:"json",
                                                    url:"listaPrestadores.php", 
                                                    type: "GET",
                                                    success:function(result){

                                                        if (result.memssagem == "Nenhum registro encontrado!!!") {
                                                            `
                                                            <div>
                                                                ${document.getElementById("automotivo").innerHTML = result.memssagem }
                                                            </div>
                                                            `
                                                        } else {

                                                            console.log(result.memssagem);
                                                            retornoObj = JSON.stringify(result);
                                                            retornoTxt = JSON.parse(retornoObj);
                                                            cliArray = retornoTxt.body;
                                                            console.log(cliArray);

                                                            
                                                            for(let i in cliArray) {
                                                                var div = document.createElement('div'); // criar o elemento
                                                                div.innerHTML = cliArray[i]['id_cli']; // dar-lhe conteúdo
                                                                console.log(cliArray[i]);
                                                                document.body.appendChild(div); // inserir no DOM */
                                                            }
                                                        }
                                                    }
                                                });
                                            }
                                        </script>
                                    </div>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-times me-1"></i>
                                        Fechar
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 4 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Eletrodomésticos</h2>
                                    <p class="item-intro text-muted">Aqui você encontra os profissionais da área de eletrodomésticos. </p>
                                    <div id="eletrodomesticos">        
                                        <script type="text/javascript">
                                            function getEletrodom() {

                                                $.ajax({
                                                    dataType:"json",
                                                    url:"listaPrestadores.php", 
                                                    type: "GET",
                                                    success:function(result){

                                                        if (result.memssagem == "Nenhum registro encontrado!!!") {
                                                            `
                                                            <div>
                                                                ${document.getElementById("eletrodomesticos").innerHTML = result.memssagem }
                                                            </div>
                                                            `
                                                        } else {

                                                            console.log(result.memssagem);
                                                            retornoObj = JSON.stringify(result);
                                                            retornoTxt = JSON.parse(retornoObj);
                                                            cliArray = retornoTxt.body;
                                                            console.log(cliArray);

                                                            
                                                            for(let i in cliArray) {
                                                                var div = document.createElement('div'); // criar o elemento
                                                                div.innerHTML = cliArray[i]['id_cli']; // dar-lhe conteúdo
                                                                console.log(cliArray[i]);
                                                                document.body.appendChild(div); // inserir no DOM */
                                                            }
                                                        }
                                                    }
                                                });
                                            }
                                        </script>
                                    </div>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-times me-1"></i>
                                        Fechar
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 5 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Eletroportáteis</h2>
                                    <p class="item-intro text-muted">Aqui você encontra os profissionais da área de eletroportáteis.</p>
                                    <div id="eletroportateis">        
                                        <script type="text/javascript">
                                            function getEletropor() {

                                                $.ajax({
                                                    dataType:"json",
                                                    url:"listaPrestadores.php", 
                                                    type: "GET",
                                                    success:function(result){

                                                        if (result.memssagem == "Nenhum registro encontrado!!!") {
                                                            `
                                                            <div>
                                                                ${document.getElementById("eletroportateis").innerHTML = result.memssagem }
                                                            </div>
                                                            `
                                                        } else {

                                                            console.log(result.memssagem);
                                                            retornoObj = JSON.stringify(result);
                                                            retornoTxt = JSON.parse(retornoObj);
                                                            cliArray = retornoTxt.body;
                                                            console.log(cliArray);

                                                            
                                                            for(let i in cliArray) {
                                                                var div = document.createElement('div'); // criar o elemento
                                                                div.innerHTML = cliArray[i]['id_cli']; // dar-lhe conteúdo
                                                                console.log(cliArray[i]);
                                                                document.body.appendChild(div); // inserir no DOM */
                                                            }
                                                        }
                                                    }
                                                });
                                            }
                                        </script>
                                    </div>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-times me-1"></i>
                                        Fechar
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 6 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Transportes</h2>
                                    <p class="item-intro text-muted">Aqui você encontra os profissionais da área de transportes.</p>
                                    <div id="transportes">        
                                        <script type="text/javascript">
                                            function getTrans() {

                                                $.ajax({
                                                    dataType:"json",
                                                    url:"listaPrestadores.php", 
                                                    type: "GET",
                                                    success:function(result){

                                                        if (result.memssagem == "Nenhum registro encontrado!!!") {
                                                            `
                                                            <div>
                                                                ${document.getElementById("transportes").innerHTML = result.memssagem }
                                                            </div>
                                                            `
                                                        } else {

                                                            console.log(result.memssagem);
                                                            retornoObj = JSON.stringify(result);
                                                            retornoTxt = JSON.parse(retornoObj);
                                                            cliArray = retornoTxt.body;
                                                            console.log(cliArray);

                                                            
                                                            for(let i in cliArray) {
                                                                var div = document.createElement('div'); // criar o elemento
                                                                div.innerHTML = cliArray[i]['id_cli']; // dar-lhe conteúdo
                                                                console.log(cliArray[i]);
                                                                document.body.appendChild(div); // inserir no DOM */
                                                            }
                                                        }
                                                    }
                                                });
                                            }
                                        </script>
                                    </div>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-times me-1"></i>
                                        Fechar
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 7 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal7" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Não encontrou?</h2>
                                    <p class="item-intro text-muted">Pesquise entre os demais profissionais cadastrados.</p>
                                    <div id="outros">        
                                        <script type="text/javascript">
                                            function getOthers() {

                                                $.ajax({
                                                    dataType:"json",
                                                    url:"listaPrestadores.php", 
                                                    type: "GET",
                                                    success:function(result){

                                                        if (result.memssagem == "Nenhum registro encontrado!!!") {
                                                            `
                                                            <div>
                                                                ${document.getElementById("outros").innerHTML = result.memssagem }
                                                            </div>
                                                            `
                                                        } else {

                                                            console.log(result.memssagem);
                                                            retornoObj = JSON.stringify(result);
                                                            retornoTxt = JSON.parse(retornoObj);
                                                            cliArray = retornoTxt.body;
                                                            console.log(cliArray);

                                                            
                                                            for(let i in cliArray) {
                                                                //document.getElementById("automotivo").innerHTML = cliArray[i]['id_cli'];
                                                                var div = document.createElement('div'); // criar o elemento
                                                                div.innerHTML = cliArray[i]['id_cli']; // dar-lhe conteúdo
                                                                console.log(cliArray[i]);
                                                                document.body.appendChild(div); // inserir no DOM */

                                                                /* `
                                                                <div>
                                                                    ${document.getElementById("automotivo").innerHTML = cliArray[i]['id_cli']}
                                                                </div>
                                                                ` */
                                                            }
                                                        }
                                                    }
                                                });
                                            }
                                        </script>
                                    </div>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-times me-1"></i>
                                        Fechar
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal Cadastro de Clientes-->
        <div class="portfolio-modal modal fade" id="modalCadastroCliente" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-6">
                                <div class="modal-body">
                                    <h2 class="text-uppercase">Cadastre-se!</h2>
                                    <p class="item-intro text-muted">E tenha acesso aos melhores profissionais da sua região</p>
                                    <div class="container px-5 my-5">
                                        <form id="CadastroCliForm" novalidate>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="nomeCli" type="text" placeholder="Nome" required/>
                                                <label for="nomeCli">Nome</label>
                                                <div class="invalid-feedback">Informe seu nome</div>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="telefoneCli" type="text" placeholder="Telefone"/>
                                                <label for="telefoneCli">Telefone</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="celularCli" type="text" placeholder="Celular" required/>
                                                <label for="celularCli">Celular</label>
                                                <div class="invalid-feedback">Informe seu celular</div>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="emailCli" type="email" placeholder="Email" required/>
                                                <label for="emailCli">Email</label>
                                                <div class="invalid-feedback">Informe seu e-mail</div>
                                                <div class="invalid-feedback">Digite um e-mail válido.</div>
                                            </div>
                                            <div class="d-none" id="submitSuccessMessage">
                                                <div class="text-center mb-3">
                                                    <div class="fw-bolder">Form submission successful!</div>
                                                    <p>To activate this form, sign up at</p>
                                                    <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                                                </div>
                                            </div>
                                            <div class="d-none" id="submitErrorMessage">
                                                <div class="text-center text-danger mb-3">Error sending message!</div>
                                            </div>
                                            <div class="d-grid">
                                                <button class="btn btn-primary btn-lg" id="submitCli" type="submit">Cadastrar</button>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal Cadastro de Prestadores-->
        <div class="portfolio-modal modal fade" id="modalCadastroPrestador" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-6">
                                <div class="modal-body">
                                    <h2 class="text-uppercase">Cadastre-se!</h2>
                                    <p class="item-intro text-muted">E forneça os melhores serviços da sua região</p>
                                    <div class="container px-5 my-5">
                                        <form id="CadastroPresForm" novalidate>
<!--                                         <form id="CadastroPresForm" method="POST" action="cadastroPrestador.php" novalidate> -->
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="nome" type="text" placeholder="Nome" value="" required/>
                                                <label for="nome">Nome</label>
                                                <div class="invalid-feedback">Informe seu nome</div>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="telefone" type="text" placeholder="Telefone" value=""/>
                                                <label for="telefone">Telefone</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="celular" type="text" placeholder="Celular" value="" required/>
                                                <label for="celular">Celular</label>
                                                <div class="invalid-feedback">Informe seu celular</div>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="mail" type="email" placeholder="Email" value="" required,email/>
                                                <label for="mail">Email</label>
                                                <div class="invalid-feedback">Informe seu e-mail</div>
                                                <div class="invalid-feedback">Digite um e-mail válido.</div>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <select class="form-select" id="id_categoria" aria-label="Categoria">
                                                    <option value="Selecione...">Selecione...</option>
                                                    <option value="1">Informática</option>
                                                    <option value="2">Construção Civil</option>
                                                    <option value="3">Automotivo</option>
                                                    <option value="4">Eletrodomésticos</option>
                                                    <option value="5">Eletroportáteis</option>
                                                    <option value="6">Transportes</option>
                                                    <option value="7">Outros</option>
                                                </select>
                                                <label for="id_categoria">Categoria</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <textarea class="form-control" id="desc_serv" type="text" value="" placeholder="Descreva suas habilidades" style="height: 10rem;" required></textarea>
                                                <label for="desc_serv">Conte um pouco sobre os seus serviços</label>
                                                <div class="invalid-feedback">Necessário descrever quais os serviços prestados</div>
                                            </div>
                                            <div class="d-none" id="submitSuccessMessage">
                                                <div class="text-center mb-3">
                                                    <div class="fw-bolder">Form submission successful!</div>
                                                    <p>To activate this form, sign up at</p>
                                                    <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                                                </div>
                                            </div>
                                            <div class="d-none" id="submitErrorMessage">
                                                <div class="text-center text-danger mb-3">Error sending message!</div>
                                            </div>
                                            <div class="d-grid">
                                                <button class="btn btn-primary btn-lg" id="submitPres" value="submitPres" type="submit">Cadastrar</button>
                                                <!-- <button class="btn btn-primary btn-lg" id="submitPres" type="submit">Cadastrar</button> -->
                                            </div>
                                            <script>
                                                $("#submitPres").click(function(event){
                
                                                    //EVITAR QUE O FORMULÁRIO SEJA SUBMETIDO ANTES DO ENVIO PARA A API
                                                    event.preventDefault();

                                                    //ENVIA PARA A API
                                                    $.ajax({
                                                        //METODO DE ENVIO
                                                        type: "POST",
                                                        //URL PARA QUAL OS DADOS SERÃO ENVIADOS
                                                        url: "/cadastroPrestador.php",
                                                        //DADOS QUE SERÃO ENVIADOS
                                                        data: $("#CadastroPresForm").serialize(),
                                                        //TIPOS DE DADOS QUE O AJAX TRATA
                                                        dataType: "json",
                                                        //CASO DÊ TUDO CERTO NO ENVIO PARA A API
                                                        success: function(){
                                                            //SUBMETE O FORMULÁRIO PARA A ACTION DEFINIDA NO CABEÇALHO
                                                            $("#CadastroPresForm").submit();
                                                        }
                                                    });
                                                })
                                            </script>
                                        </form>
                                    </div>
                                    
                                    <!-- <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal Login-->
        <div class="portfolio-modal modal fade" id="modalLogin" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="modal-body justify-content-center">
                                    <h2 class="text-uppercase">Entre</h2>
                                    <p class="item-intro text-muted">Faça seu login.</p>
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="usuario" type="text" value="" placeholder="Usuário(e-mail)" required />
                                        <label for="usuario">E-mail</label>
                                        <div class="invalid-feedback">Informe seu e-mail</div>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="password" id="inputPassword" class="form-control" placeholder="Digite sua senha" required>
                                        <label for="inputPassword">Senha</label>
                                    </div>
                                    <div class="d-grid">
                                        <button class="btn btn-primary btn-lg" id="loginButton" type="submit">Entrar</button>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script> -->
    </body>
</html>
