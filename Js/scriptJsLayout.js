class TableCSVExporter {
    constructor (table, includeHeaders = true) {
        this.table = table; //this is content to table..
        this.rows = Array.from(table.querySelectorAll("tr")); //This is all rows 

        if (!includeHeaders && this.rows[0].querySelectorAll("th").length) { //this is number of content in each row
            this.rows.shift();
        }
    }

    convertToCSV () {
        const lines = [];
        const numCols = this._findLongestRowLength(); 
        for (const row of this.rows) {
            let line = "";
            for (let i = 0; i < numCols; i++) {
                if (row.children[i] !== undefined) { //this condition to access all td or th in all row
                    line += TableCSVExporter.parseCell(row.children[i]);
                }
                line += (i !== (numCols - 1)) ? "," : "";
            }
            lines.push(line);
        }
        return lines.join("\n");
    }

    //this function calaulate number of columns in tables...
    _findLongestRowLength () {
        return this.rows.reduce((l, row) => row.childElementCount > l ? row.childElementCount : l, 0);
    }

    static parseCell (tableCell) {
        let parsedValue = tableCell.textContent;
        // Replace all double quotes with two double quotes
        parsedValue = parsedValue.replace(/"/g, `""`);
        // If value contains comma, new-line or double-quote, enclose in double quotes
        parsedValue = /[",\n]/.test(parsedValue) ? `"${parsedValue}"` : parsedValue;

        return parsedValue;
    }
}
