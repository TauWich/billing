import { el } from './base.js';

class Table
{
    #table = el("table", ["table", "table-striped", "table-hover", "table-dark"]);

    constructor(data)
    {
        const thead = el('thead');
        const tbody = el('tbody');

        this.#table.appendChild(thead);
        this.#table.appendChild(tbody);

        if (!Array.isArray(data)) return;

        const headRow = this.#row(Object.keys(data[0]));
        thead.appendChild(headRow);

        data.forEach(element => {
            const row = this.#row(element);
            tbody.appendChild(row);
        });
    }

    #row(data)
    {
        const row = el('tr');
        for (const [key, value] of Object.entries(data)) {
            const td = el('td');
            td.innerText = value;
            row.appendChild(td);
        };

        return row;
    }

    getElement()
    {
        return this.#table;
    }
}

//=======================================================
//--------============EXPORT SECTION============---------
//=======================================================
export {Table};