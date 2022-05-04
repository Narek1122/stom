function tog(p, t) {
    let offLeft = document.getElementById(p);
    let typeInp = document.getElementById('typeInp');
    typeInp.value = 'parent'
    if (p == 'btn_smol') {
        typeInp.value = 'children'
    }

    t.style.backgroundColor = 'none';
    t.style.backgroundColor = '';
    t.style.color = '';
    offLeft.style.background = 'transparent';
    offLeft.style.color = '#000';
}