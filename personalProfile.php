<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/profilo.css" type="text/css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>My Profile</title>
</head>

<body>
    <header>
        <h1>Nome Utente</h1>
    </header>
    <main>
        <section>
            <img src="./img/pfimg.png" alt="">
            <table>
                <tr>
                    <th id="viniinseriti">Vini inseriti</th>
                    <th id="followers">Amici</th>
                    <th id="accountseguiti">Account Seguiti</th>
                </tr>
                <tr>
                    <td headers="viniinseriti">12</td>
                    <td headers="amici">34</td>
                    <td headers="accountseguiti">33</td>
                </tr>
            </table>
            <div>
                <button name="inseriscivino" id="newpost">Inserisci vino</button>
                <button name="modificaprofilo" id="editprofile">Modifica Profilo</button>
                <button name="esci" id="exit"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                        fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0z" />
                        <path fill-rule="evenodd"
                            d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708z" />
                    </svg> Esci </button>
            </div>
            <ul>
                <li>
                    Breve descrizione:
                    <?php echo ($descrizione); ?>
                </li>
                <li>
                    Informazioni persoanli:
                    <?php echo ($infoPersonali); ?>
                </li>
            </ul>
        </section>
        <section>
            <table>
                <tr>
                    <td class="gotoposts">
                        <ul>
                            <li><img src="./img/imgPost.png" alt=""></li>
                            <li>Nome vino</li>
                            <li>
                                <img src="./img/fullglass.png" alt="">
                                <img src="./img/fullglass.png" alt="">
                                <img src="./img/fullglass.png" alt="">
                                <img src="./img/emptyglass.png" alt="">
                                <img src="./img/emptyglass.png" alt="">
                            </li>
                        </ul>
                    </td>
                    <td class="gotoposts">
                        <ul>
                            <li><img src="./img/imgPost.png" alt=""></li>
                            <li>Nome vino</li>
                            <li>
                                <img src="./img/fullglass.png" alt="">
                                <img src="./img/fullglass.png" alt="">
                                <img src="./img/fullglass.png" alt="">
                                <img src="./img/emptyglass.png" alt="">
                                <img src="./img/emptyglass.png" alt="">
                            </li>
                        </ul>
                    </td>
                    <td class="gotoposts">
                        <ul>
                            <li><img src="./img/imgPost.png" alt=""></li>
                            <li>Nome vino</li>
                            <li>
                                <img src="./img/fullglass.png" alt="">
                                <img src="./img/fullglass.png" alt="">
                                <img src="./img/fullglass.png" alt="">
                                <img src="./img/emptyglass.png" alt="">
                                <img src="./img/emptyglass.png" alt="">
                            </li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td class="gotoposts">
                        <ul>
                            <li><img src="./img/imgPost.png" alt=""></li>
                            <li>Nome vino</li>
                            <li>
                                <img src="./img/fullglass.png" alt="">
                                <img src="./img/fullglass.png" alt="">
                                <img src="./img/fullglass.png" alt="">
                                <img src="./img/emptyglass.png" alt="">
                                <img src="./img/emptyglass.png" alt="">
                            </li>
                        </ul>
                    </td>
                    <td class="gotoposts">
                        <ul>
                            <li><img src="./img/imgPost.png" alt=""></li>
                            <li>Nome vino</li>
                            <li>
                                <img src="./img/fullglass.png" alt="">
                                <img src="./img/fullglass.png" alt="">
                                <img src="./img/fullglass.png" alt="">
                                <img src="./img/emptyglass.png" alt="">
                                <img src="./img/emptyglass.png" alt="">
                            </li>
                        </ul>
                    </td>
                    <td class="gotoposts">
                        <ul>
                            <li><img src="./img/imgPost.png" alt=""></li>
                            <li>Nome vino</li>
                            <li>
                                <img src="./img/fullglass.png" alt="">
                                <img src="./img/fullglass.png" alt="">
                                <img src="./img/fullglass.png" alt="">
                                <img src="./img/emptyglass.png" alt="">
                                <img src="./img/emptyglass.png" alt="">
                            </li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td class="gotoposts">
                        <ul>
                            <li><img src="./img/imgPost.png" alt=""></li>
                            <li>Nome vino</li>
                            <li>
                                <img src="./img/fullglass.png" alt="">
                                <img src="./img/fullglass.png" alt="">
                                <img src="./img/fullglass.png" alt="">
                                <img src="./img/emptyglass.png" alt="">
                                <img src="./img/emptyglass.png" alt="">
                            </li>
                        </ul>
                    </td>
                    <td class="gotoposts">
                        <ul>
                            <li><img src="./img/imgPost.png" alt=""></li>
                            <li>Nome vino</li>
                            <li>
                                <img src="./img/fullglass.png" alt="">
                                <img src="./img/fullglass.png" alt="">
                                <img src="./img/fullglass.png" alt="">
                                <img src="./img/emptyglass.png" alt="">
                                <img src="./img/emptyglass.png" alt="">
                            </li>
                        </ul>
                    </td>
                </tr>
            </table>
        </section>
    </main>
    <nav>
        <ul class="nav nav-pills nav-justified">
            <li class="nav-item">
                <a class="nav-link" href="homepage.html">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="esplora.html">Esplora</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="personalProfile.php">Profilo</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="mialista.html">Mia Lista</a>
            </li>
        </ul>
    </nav>
    <script src="./javascript/goTo.js" type="text/javascript"></script>
</body>

</html>