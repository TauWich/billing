import { Table } from './modules/table.js';

function historyPushState(page){
    window.history.pushState({'page': page}, '', '#'+page);
}

function pageInject(data)
{
    let table = new Table(data);
    document.getElementById('main').innerHTML = '';
    document.getElementById('main').appendChild(table.getElement());
}

function activate(target)
{
    document.getElementById("nav").querySelector("a.active").classList.toggle("active");
    target.classList.add("active");
}

//=======================================================
//--------============EXPORT SECTION============---------
//=======================================================
export {historyPushState, pageInject, activate};