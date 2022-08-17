function empresaVendeuAlma(){
    let vendaDeAlma = document.enterpriseFormulary.vendaDeAlmaDeEmpresa;
    if (vendaDeAlma.checked === false){
        alert("É necessário concordar com os Termos de Uso e Política de Privacidade para criar uma conta no Lá Tem.");
    } else {
        document.formulary.submit();
    }
}