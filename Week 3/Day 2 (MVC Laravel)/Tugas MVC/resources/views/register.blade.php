<!DOCTYPE html>
<html>
    <head>
        <title>Form Pendaftaran SanderBook</title>
        <meta charset="UTF-8">
    </head>

        <body>

            <div>
                <h1>Buat Account Baru!</h1>
                <h3>Sign Up Form</h2>
            </div>
            <div>
                <form action="/register" method="POST">
                @csrf
                    <label for="nama_awal">First name : </label><br>
                    <br>
                    <input type="text" name="nama_awal"><br>
                    <br>
                    <label for="nama_akhir">Last name : </label><br>
                    <br>
                    <input type="text" name="nama_akhir"><br>
                    <br>
                    <label for="gender">Gender : </label><br>
                    <br>
                    <input type="radio" name="gender" value="0" checked>Laki-laki<br>
                    <input type="radio" name="gender" value="1">Perempuan<br>
                    <input type="radio" name="gender" value="2">Other
                    <br>
                    <br>
                    <label for="nation">Nationality : </label><br>
                    <br>
                    <select name="nation">
                        <option value="0">Indonesian</option>
                        <option value="1">Malaysian</option>
                        <option value="2">Singaporean</option>
                    </select>
                    <br>
                    <br>
                    <label for="lang">Language Spoken : </label><br>
                    <br>
                    <input type="checkbox" name="lang" value="0" checked> Bahasa Indonesia <br>
                    <input type="checkbox" name="lang" value="1"> English<br>
                    <input type="checkbox" name="lang" value="2"> Other<br>
                    <br>
                    <label for="bio">Bio :</label><br>
                    <textarea cols="40" rows="7" id="bio"></textarea><br>
                    <br>
                    <input type=submit onClick="parent.location='welcome'" value='Sign Up'>
                </form>
            </div>
        </body>
</html>