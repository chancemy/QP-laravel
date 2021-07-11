const typeBtns = document.querySelectorAll('.type-btn');
typeBtns.forEach(typeBtn => typeBtn.addEventListener('click', toggleItem), {
    capture: false //為true的話 捕捉的順序由父層向子層
});
var catagoryBtns = document.querySelectorAll('.catagory-btn');
function toggleItem(e) {
    e.stopPropagation();
    const item = this.querySelector('.item-btn');
    var items = document.querySelectorAll('.item-btn');
    items.forEach(element => element.classList.add('hide'));
    if (!item) {
        return
    } else {
        item.classList.remove('hide');
    }
}
const checkBoxes = document.querySelectorAll('.product-type li')
checkBoxes.forEach(checkBox => checkBox.addEventListener('click', toggleCheck), {
    capture: false //為true的話 捕捉的順序由父層向子層
})
function toggleCheck(e) {
    e.stopPropagation();
    checkBoxes.forEach(checkBox => checkBox.classList.remove('checked'));
    this.classList.add('checked');
}
var products = document.querySelectorAll('.product-container');
typeBtns.forEach(typeBtn => typeBtn.addEventListener('click', showItem), {
    capture: false //為true的話 捕捉的順序由父層向子層
});
catagoryBtns.forEach(catagoryBtn => catagoryBtn.addEventListener('click', showType), {
    capture: false
    //為true的話 捕捉的順序由父層向子層
})
function hideAll() {
    products.forEach(product => product.classList.add('hidden'));
}
function showItem(e) {
    let type = this.dataset.type;
    if (type == 0) {
        products.forEach(product => product.classList.remove('hidden'));
    } else {
        hideAll();
        console.log(type);
        products.forEach(element => {
            if (element.dataset.type == type) {
                element.classList.remove('hidden');
            }
        });
    }
}

function showType(e) {
    let typeId = this.dataset.id;
    hideAll();
    products.forEach(element => {

        if (element.dataset.typeid == typeId) {
            element.classList.remove('hidden');
        }
    });
}
