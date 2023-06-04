window.onload=()=>{
    document.getElementById('sfb').addEventListener('click',()=>{
        const getFileEl = document.getElementsByName('myfile')[0];
        getFileEl.click();
        getFileEl.addEventListener('change',(e)=>{
            document.getElementById('showNameFile').innerText=`Name File: ${getFileEl.files[0].name}`
        })
    })
}