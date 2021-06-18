const showPass = () => 
{
    const iptPass = document.getElementById('iptPass')
    
    if( iptPass.type === "password" )
        iptPass.type = "text"
    else
        iptPass.type = "password"
}

const showVlPass = () =>
{
    const iptVlPass = document.getElementById('iptVlPass')

    if( iptVlPass.type === "password" )
        iptVlPass.type = "text"
    else
        iptVlPass.type = "password"

}

const showAdmPass = () => 
{
    const iptAdmPass = document.getElementById('iptAdmPass')
    
    if( iptPass.type === "password" )
        iptPass.type = "text"
    else
        iptPass.type = "password"
}

// mostra o campo do código do administrador e altera o icon do botão
const showAdmField = () =>
{
    const btn = document.querySelector('.dev-login-btn')
    const admField = document.querySelector('.admField')
    const icons = [
        'url(_img/_svg/icons/devicon.svg)',
        'url(_img/_svg/icons/user.svg)'
    ];

    if( admField.style.display === "none" ){
        admField.style.display = "block"
        btn.style.backgroundImage = icons[1]
        btn.style.backgroundSize = "22px"
    }else{
        admField.style.display = "none"
        btn.style.backgroundImage = icons[0]
        btn.style.backgroundSize = "12px"
    }

}

