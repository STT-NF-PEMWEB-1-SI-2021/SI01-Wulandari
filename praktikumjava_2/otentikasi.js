function userpswt(){
    let pengguna = document.getElementById("masukan");
    let usname = pengguna.user.value;
    let passwrd = pengguna.pswt.value;
    console.log(pengguna);
    console.log(passwrd);
    if(usname == "wulan2021"){
        if(passwrd == "care"){
            console.log("Terdaftar");
            alert("login berhasil");
            document.getElementById("berhasil");
            document.write("<h2>Login Berhasil!</h2>");
        }else{
            console.log("password salah!");
            alert("Password salah")
        }
    }else{
        console.log("Username Tidak Terdaftar!");
        alert("Username Tidak Terdaftar")
    }
}