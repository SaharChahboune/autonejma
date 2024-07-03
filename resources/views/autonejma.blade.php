<!-- resources/views/another-page.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Auto Nejma</title>
    <style>
            body{
                background-image: url('/img/index-wallpaper.jpg');
                color:white;

            }
           body,html{
            height: 100%;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: Arial, sans-serif;
        }
        .container {
            background-color:rgba(41, 32, 122,0.4);
            text-align: center;
            width: 750px;
            height:80vh;
            padding: 20px;
            border: 1px solid #000;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        .container form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .container label {
            margin-top: 10px;
            text-align: left;
        }
        .container input {
            margin-bottom: 10px;
            padding: 8px;
            width: 100%;
            max-width: 300px;
        }
        .container button {
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .container button:hover {
            background-color: #0056b3;
        }
        .container .alert {
            margin-bottom: 10px;
            padding: 10px;
            width: 100%;
            max-width: 300px;
            text-align: left;
        }
        .container .alert-success {
            color: #155724;
            background-color: #d4edda;
            border-color: #c3e6cb;
        }
        .container .alert-danger {
            display:none;
            color: #721c24;
            background-color: #f8d7da;
            border-color: #f5c6cb;
        }
        .container a {
            margin-top: 20px;
            color: #007bff;
            text-decoration: none;
        }
        .container a:hover {
            text-decoration: underline;
        }
        </style>
</head>
<body>
   
    <div class="container">
        @if(session()->has('nom') && session()->has('prenom') && session()->has('role'))
            <p> Bienvenue {{ session('nom') }} {{ session('prenom') }} !</p>
            <button onclick="showDemande()">Nouvelle demande</button>
            <button onclick="showUpdateDemande()">Changer demande</button>
        @endif
        <div class="nv-demande">
        <p>Nouvelle Demande</p>
        <form action="">
            <div>
                <p>Benificiaire</p>
                <input type="text" name="prenom" id="prenom" placeholder="prenom">
                <input type="text" name="nom" id="nom" placeholder="nom">
                <input type="text" name="email" id="email" placeholder="email">
                <input type="text" name="departement" id="departement" placeholder="departement">
            </div>
            <div>
                <div>
                    <label for="familleArticle">Famille Article :</label>
                    <select name="familleArticle" id="familleArticle">
                        <option value="other">other</option>
                    </select>
                </div>
                <div>
                    <label for="sousFamille">Sous Famille Article :</label>
                    <select name="sousFamille" id="sousFamille">
                        <option value="other">other</option>
                    </select>
                </div>
                
                <textarea name="description" id="description" placeholder="description"></textarea>
            </div>
            <input type="submit" value="confirmer">
        </form>
        </div>
        <div class="update-demande">
        <p>Changement Demande</p>
        <form action="">
            <div>
                <p>Benificiaire</p>
                <input type="text" name="prenom" id="prenom" placeholder="prenom">
                <input type="text" name="nom" id="nom" placeholder="nom">
                <input type="text" name="email" id="email" placeholder="email">
                <input type="text" name="departement" id="departement" placeholder="departement">
            </div>
            <div>
                <div>
                    <label for="numSerie">N°Serie Materiel</label>
                    <input type="text" name="numSerie" id="numSerie">
                </div>
                <div>
                    <label for="familleArticle">Famille Article :</label>
                    <select name="familleArticle" id="familleArticle">
                        <option value="other">other</option>
                    </select>
                </div>
                <div>
                    <label for="sousFamille">Sous Famille Article :</label>
                    <select name="sousFamille" id="sousFamille">
                        <option value="other">other</option>
                    </select>
                </div>
                
                <textarea name="description" id="description" placeholder="description"></textarea>
            </div>
            <input type="submit" value="confirmer">
        </form>
        </div>
    </div>
    <script>
 function showDemande() {
            document.querySelector('.nv-demande').style.display = 'block';
            document.querySelector('.update-demande').style.display = 'none';
        }

        function showUpdateDemande() {
            document.querySelector('.nv-demande').style.display = 'none';
            document.querySelector('.update-demande').style.display = 'block';
        }

        // Hide both divs on DOM load
        document.addEventListener('DOMContentLoaded', function() {
            document.querySelector('.nv-demande').style.display = 'none';
            document.querySelector('.update-demande').style.display = 'none';
        });
    </script>
</body>
</html>
