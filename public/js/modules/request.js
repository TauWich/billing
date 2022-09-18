function request(src)
{
    return new Promise((resolve, reject) =>
    {
        const xhr = new XMLHttpRequest();
        
        let url = "";
        url = src;

        xhr.open('GET', url);

        xhr.onload = function ()
        {
            if (this.status >= 200 && this.status < 300)
            {
                let data = "";

                try
                {
                    data = JSON.parse(xhr.response);
                }
                catch(e)
                {
                    reject( {error: "Error parsing response: " + xhr.response} );
                }

                resolve(data);
            }
            else
            {
                reject({
                    error: "Invalid response",
                    status: this.status,
                    statusText: xhr.statusText
                });
            }
        };

        xhr.onerror = function () {
            reject({
                error: "XHR Error",
                status: this.status,
                statusText: xhr.statusText
            });
        };

        xhr.send();
    });
}

//=======================================================
//--------============EXPORT SECTION============---------
//=======================================================
export {request};