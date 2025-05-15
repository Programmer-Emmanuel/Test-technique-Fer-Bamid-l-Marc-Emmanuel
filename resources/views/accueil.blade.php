<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('style')
    <title>TransfertExpress - Solution de transfert d'argent sécurisée</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body class="bg-gray-50 text-gray-800 font-sans">


    @include('nav')

    <section class="relative bg-gradient-to-r from-green-50 to-gray-50 py-20 px-4 overflow-hidden">
        <div class="max-w-7xl mx-auto">
            <div class="flex flex-col md:flex-row items-center">
                <div class="md:w-1/2 mb-12 md:mb-0 md:pr-10">
                    <h1 class="text-4xl md:text-5xl font-bold text-gray-800 leading-tight mb-6">
                        Envoyez de l'argent à vos proches en toute <span class="text-green-600">sécurité</span>
                    </h1>
                    <p class="text-lg text-gray-600 mb-8">
                        TransfertExpress révolutionne les transferts d'argent avec des frais réduits, une vitesse incomparable et une sécurité bancaire de niveau premium. Rejoignez plus de 2 millions d'utilisateurs satisfaits.
                    </p>
                    <div class="flex flex-col sm:flex-row space-y-4 sm:space-y-0 sm:space-x-4">
                        @auth
                            <a href="{{route('liste')}}" class="bg-green-600 hover:bg-green-700 text-white px-8 py-4 rounded-full shadow-lg transition duration-300 text-lg font-semibold text-center">
                                Commencer maintenant <i class="fas fa-arrow-right ml-2"></i>
                            </a>
                        @else    
                            <a href="{{route('loginView')}}" class="bg-green-600 hover:bg-green-700 text-white px-8 py-4 rounded-full shadow-lg transition duration-300 text-lg font-semibold text-center">
                            Commencer maintenant <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                        @endauth
                        <a href="#services" class="border-2 border-green-600 text-green-600 hover:bg-green-50 px-8 py-4 rounded-full transition duration-300 text-lg font-semibold text-center">
                            Services
                        </a>
                    </div>
                    <div class="mt-8 flex items-center">
                        <div class="flex -space-x-2">
                            <img class="h-10 w-10 rounded-full border-2 border-white" src="https://randomuser.me/api/portraits/women/12.jpg" alt="">
                            <img class="h-10 w-10 rounded-full border-2 border-white" src="https://randomuser.me/api/portraits/men/32.jpg" alt="">
                            <img class="h-10 w-10 rounded-full border-2 border-white" src="https://randomuser.me/api/portraits/women/45.jpg" alt="">
                        </div>
                        <div class="ml-4">
                            <p class="text-gray-600 font-medium">+2M utilisateurs</p>
                            <div class="flex items-center">
                                <i class="fas fa-star text-yellow-400"></i>
                                <p class="ml-1 text-gray-600">4.9/5 (12K avis)</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="md:w-1/2 relative">
                    <img src="/images/b9d8bcdf-a0c7-4385-a112-b03414429246.jpeg" alt="Transfert d'argent sécurisé" class="rounded-xl shadow-2xl w-full h-auto transform  transition duration-500">
                    <div class="absolute -bottom-6 -left-6 bg-white p-4 rounded-xl shadow-lg hidden md:block">
                        <div class="flex items-center">
                            <div class="bg-green-100 p-3 rounded-full">
                                <i class="fas fa-bolt text-green-600 text-xl"></i>
                            </div>
                            <div class="ml-3">
                                <p class="font-bold text-gray-800">Transfert instantané</p>
                                <p class="text-sm text-gray-600">Quelques secondes seulement</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services section améliorée -->
    <section id="services" class="py-20 px-4 bg-white">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-16">
                <span class="text-green-600 font-semibold">NOS SOLUTIONS</span>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mt-2">Des services conçus pour vos besoins</h2>
                <p class="mt-4 text-lg text-gray-600 max-w-2xl mx-auto">
                    Découvrez une gamme complète de services financiers adaptés à vos transferts d'argent, où que vous soyez dans le monde.
                </p>
            </div>

            <div class="grid gap-10 grid-cols-1 md:grid-cols-3">

                <div class="bg-gray-50 rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition duration-500 transform hover:-translate-y-2">
                    <div class="h-60 overflow-hidden">
                        <img src="/images/5f942cce-d801-4d10-a72e-6b19385c8f66.jpeg" alt="Transfert instantané" class="w-full h-full object-cover transition duration-500 hover:scale-110">
                    </div>
                    <div class="p-8">
                        <div class="bg-green-100 w-12 h-12 rounded-full flex items-center justify-center mb-4">
                            <i class="fas fa-bolt text-green-600 text-xl"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-3">Transfert instantané</h3>
                        <p class="text-gray-600 mb-4">
                            Envoyez de l'argent en temps réel vers plus de 150 pays avec des frais compétitifs et un taux de change avantageux.
                        </p>
                        <ul class="space-y-2 mb-6">
                            <li class="flex items-center">
                                <i class="fas fa-check-circle text-green-500 mr-2"></i>
                                <span>Reçu en quelques minutes</span>
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check-circle text-green-500 mr-2"></i>
                                <span>Notifications en temps réel</span>
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check-circle text-green-500 mr-2"></i>
                                <span>Suivi complet des transactions</span>
                            </li>
                        </ul>
                        <a href="#" class="text-green-600 font-semibold hover:text-green-700 flex items-center">
                            En savoir plus <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                </div>

                <div class="bg-gray-50 rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition duration-500 transform hover:-translate-y-2">
                    <div class="h-60 overflow-hidden">
                        <img src="images/Premium Protection & Security 3D Illustration pack….jpeg" alt="Sécurité renforcée" class="w-full h-full object-cover transition duration-500 hover:scale-110">
                    </div>
                    <div class="p-8">
                        <div class="bg-green-100 w-12 h-12 rounded-full flex items-center justify-center mb-4">
                            <i class="fas fa-shield-alt text-green-600 text-xl"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-3">Protection optimale</h3>
                        <p class="text-gray-600 mb-4">
                            Notre technologie de chiffrement bancaire de niveau militaire protège chaque transaction et vos données personnelles.
                        </p>
                        <ul class="space-y-2 mb-6">
                            <li class="flex items-center">
                                <i class="fas fa-check-circle text-green-500 mr-2"></i>
                                <span>Authentification à deux facteurs</span>
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check-circle text-green-500 mr-2"></i>
                                <span>Surveillance 24/7 des transactions</span>
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check-circle text-green-500 mr-2"></i>
                                <span>Assurance sur tous les transferts</span>
                            </li>
                        </ul>
                        <a href="#" class="text-green-600 font-semibold hover:text-green-700 flex items-center">
                            En savoir plus <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                </div>

                <div class="bg-gray-50 rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition duration-500 transform hover:-translate-y-2">
                    <div class="h-60 overflow-hidden">
                        <img src="images/International Staffing Company recrute 01….jpeg" alt="Support client" class="w-full h-full object-cover transition duration-500 hover:scale-110">
                    </div>
                    <div class="p-8">
                        <div class="bg-green-100 w-12 h-12 rounded-full flex items-center justify-center mb-4">
                            <i class="fas fa-headset text-green-600 text-xl"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-3">Assistance permanente</h3>
                        <p class="text-gray-600 mb-4">
                            Une équipe dédiée est disponible à tout moment pour répondre à vos questions et résoudre vos problèmes.
                        </p>
                        <ul class="space-y-2 mb-6">
                            <li class="flex items-center">
                                <i class="fas fa-check-circle text-green-500 mr-2"></i>
                                <span>Support multilingue 24/7</span>
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check-circle text-green-500 mr-2"></i>
                                <span>Résolution en moins de 15min</span>
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check-circle text-green-500 mr-2"></i>
                                <span>Assistance via chat, mail et téléphone</span>
                            </li>
                        </ul>
                        <a href="#" class="text-green-600 font-semibold hover:text-green-700 flex items-center">
                            En savoir plus <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 px-4 bg-gray-50">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-16">
                <span class="text-green-600 font-semibold">TÉMOIGNAGES</span>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mt-2">Ce que nos clients disent</h2>
            </div>

            <div class="grid gap-8 grid-cols-1 md:grid-cols-3">
                <div class="bg-white p-8 rounded-2xl shadow-lg">
                    <div class="flex items-center mb-4">
                        <div class="flex items-center">
                            <i class="fas fa-star text-yellow-400"></i>
                            <i class="fas fa-star text-yellow-400"></i>
                            <i class="fas fa-star text-yellow-400"></i>
                            <i class="fas fa-star text-yellow-400"></i>
                            <i class="fas fa-star text-yellow-400"></i>
                        </div>
                    </div>
                    <p class="text-gray-600 mb-6">
                        "J'utilise TransfertExpress pour envoyer de l'argent à ma famille au Sénégal. Les transferts sont instantanés et les frais bien moins élevés qu'avec les services traditionnels."
                    </p>
                    <div class="flex items-center">
                        <img class="h-12 w-12 rounded-full" src="https://randomuser.me/api/portraits/women/44.jpg" alt="Amina D.">
                        <div class="ml-4">
                            <p class="font-bold text-gray-800">Amina D.</p>
                            <p class="text-gray-600">Utilisatrice depuis 2022</p>
                        </div>
                    </div>
                </div>

                <div class="bg-white p-8 rounded-2xl shadow-lg">
                    <div class="flex items-center mb-4">
                        <div class="flex items-center">
                            <i class="fas fa-star text-yellow-400"></i>
                            <i class="fas fa-star text-yellow-400"></i>
                            <i class="fas fa-star text-yellow-400"></i>
                            <i class="fas fa-star text-yellow-400"></i>
                            <i class="fas fa-star text-yellow-400"></i>
                        </div>
                    </div>
                    <p class="text-gray-600 mb-6">
                        "La sécurité est primordiale pour moi. Avec TransfertExpress, je suis rassuré grâce à leur système d'authentification à deux facteurs et leurs notifications en temps réel."
                    </p>
                    <div class="flex items-center">
                        <img class="h-12 w-12 rounded-full" src="https://randomuser.me/api/portraits/men/32.jpg" alt="Thomas L.">
                        <div class="ml-4">
                            <p class="font-bold text-gray-800">Thomas L.</p>
                            <p class="text-gray-600">Utilisateur depuis 2021</p>
                        </div>
                    </div>
                </div>

                <div class="bg-white p-8 rounded-2xl shadow-lg">
                    <div class="flex items-center mb-4">
                        <div class="flex items-center">
                            <i class="fas fa-star text-yellow-400"></i>
                            <i class="fas fa-star text-yellow-400"></i>
                            <i class="fas fa-star text-yellow-400"></i>
                            <i class="fas fa-star text-yellow-400"></i>
                            <i class="fas fa-star-half-alt text-yellow-400"></i>
                        </div>
                    </div>
                    <p class="text-gray-600 mb-6">
                        "Le support client est exceptionnel. Quand j'ai eu un problème avec un transfert, ils ont répondu en moins de 10 minutes et tout résolu immédiatement."
                    </p>
                    <div class="flex items-center">
                        <img class="h-12 w-12 rounded-full" src="https://randomuser.me/api/portraits/women/68.jpg" alt="Sophie K.">
                        <div class="ml-4">
                            <p class="font-bold text-gray-800">Sophie K.</p>
                            <p class="text-gray-600">Utilisatrice depuis 2023</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-16 px-4 bg-green-600 text-white">
        <div class="max-w-4xl mx-auto text-center">
            <h2 class="text-3xl md:text-4xl font-bold mb-6">Prêt à simplifier vos transferts d'argent?</h2>
            <p class="text-lg mb-8 max-w-2xl mx-auto">
                Rejoignez des millions de personnes qui envoient de l'argent en toute simplicité, rapidité et sécurité.
            </p>
            <div class="flex flex-col sm:flex-row justify-center space-y-4 sm:space-y-0 sm:space-x-4">
                <a href="{{route('create')}}" class="bg-white text-green-600 hover:bg-gray-100 px-8 py-4 rounded-full shadow-lg transition duration-300 text-lg font-semibold">
                    Créer un compte gratuit
                </a>
                <a href="{{route('loginView')}}" class="border-2 border-white text-white hover:bg-green-700 px-8 py-4 rounded-full transition duration-300 text-lg font-semibold">
                    Se connecter
                </a>
            </div>
        </div>
    </section>

    <footer id="contact" class="bg-gray-900 text-gray-300 pt-16 pb-8 px-4">
        <div class="max-w-7xl mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-12 mb-12">
                <div>
                    <h3 class="text-white text-xl font-bold mb-6">TransfertExpress</h3>
                    <p class="mb-4">
                        La solution de transfert d'argent la plus rapide, sécurisée et économique du marché.
                    </p>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-white transition duration-300">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white transition duration-300">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white transition duration-300">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white transition duration-300">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </div>

                <div>
                    <h4 class="text-white text-lg font-semibold mb-6">Services</h4>
                    <ul class="space-y-3">
                        <li><a href="#" class="hover:text-white transition duration-300">Transfert d'argent</a></li>
                        <li><a href="#" class="hover:text-white transition duration-300">Taux de change</a></li>
                        <li><a href="#" class="hover:text-white transition duration-300">Suivi de transfert</a></li>
                        <li><a href="#" class="hover:text-white transition duration-300">Cartes prépayées</a></li>
                        <li><a href="#" class="hover:text-white transition duration-300">Paiements internationaux</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="text-white text-lg font-semibold mb-6">Entreprise</h4>
                    <ul class="space-y-3">
                        <li><a href="#" class="hover:text-white transition duration-300">À propos</a></li>
                        <li><a href="#" class="hover:text-white transition duration-300">Carrières</a></li>
                        <li><a href="#" class="hover:text-white transition duration-300">Presse</a></li>
                        <li><a href="#" class="hover:text-white transition duration-300">Blog</a></li>
                        <li><a href="#" class="hover:text-white transition duration-300">Partenaires</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="text-white text-lg font-semibold mb-6">Support</h4>
                    <ul class="space-y-3">
                        <li><a href="#" class="hover:text-white transition duration-300">Centre d'aide</a></li>
                        <li><a href="#" class="hover:text-white transition duration-300">Nous contacter</a></li>
                        <li><a href="#" class="hover:text-white transition duration-300">Sécurité</a></li>
                        <li><a href="#" class="hover:text-white transition duration-300">Frais et limites</a></li>
                        <li><a href="#" class="hover:text-white transition duration-300">FAQ</a></li>
                    </ul>
                </div>
            </div>

            <div class="border-t border-gray-800 pt-8 flex flex-col md:flex-row justify-between items-center">
                <p class="text-gray-500 text-sm mb-4 md:mb-0">
                    &copy; 2025 TransfertExpress. Tous droits réservés.
                </p>
                <div class="flex space-x-6">
                    <a href="#" class="text-gray-500 hover:text-white text-sm transition duration-300">Confidentialité</a>
                    <a href="#" class="text-gray-500 hover:text-white text-sm transition duration-300">Conditions</a>
                    <a href="#" class="text-gray-500 hover:text-white text-sm transition duration-300">Cookies</a>
                    <a href="#" class="text-gray-500 hover:text-white text-sm transition duration-300">Mentions légales</a>
                </div>
            </div>
        </div>
    </footer>

</body>
</html>