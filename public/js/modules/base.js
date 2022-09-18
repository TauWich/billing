function el(type, classlist = [], attributes= {}){
    const e = document.createElement(type);
    e.classList.add(...classlist);
    Object.entries(attributes).forEach(([key, value]) => e.setAttribute(key, value));

    return e;
}

function error (data)
{
    console.log(data);
    const errorText = data.hasOwnProperty('error') ? data.error : "Unknown error";
    const statusText = data.hasOwnProperty('statusText') ? data.statusText : "";
    const status = data.hasOwnProperty('status') ? data.status.toString() : "";

    const text = errorText + (!isEmpty(statusText) ? (": " + statusText) : "") + (!isEmpty(status) ? (" (" + status + ")") : ""); 
    alert(text);
}

function isEmpty(str){
    if (typeof str === 'string' && str.trim().length > 0)
    {
        return false;
    } 
    return true;
}

//=======================================================
//--------============EXPORT SECTION============---------
//=======================================================
export {el, error};