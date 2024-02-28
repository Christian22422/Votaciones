const cbxregion = document.getElementById('region')
cbxregion.addEventListener('change', getcomuna)
const cbxcomuna = document.getElementById('comuna')

function fetchAndSetData(url, formData, targeElement){
    return fetch(url,{
        method: "POST",
        body: formData,
        mode: 'cors'
    })
    .then(response => response.json())
    .then(data =>{
        targeElement.innerHTML = data
    })
    .catch(err => console.log(err))
}

function getcomuna(){
    let region = cbxregion.value
    let url = 'datos.php'
    let formData = new FormData()
    formData.append('id_region', region)

    fetchAndSetData(url, formData, cbxcomuna)
}