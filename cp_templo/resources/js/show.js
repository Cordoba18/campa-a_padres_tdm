const btn_export_excel = document.querySelector("#btn_export_excel");


btn_export_excel.addEventListener("click", (e) => {
        axios.get('export')
        .then(function (response) {

            const r = response.data;
            function exportToExcel(data, fileName, sheetName) {
                const worksheet = XLSX.utils.json_to_sheet(data);
                const workbook = XLSX.utils.book_new();
                XLSX.utils.book_append_sheet(workbook, worksheet, sheetName || 'Sheet1');
                XLSX.writeFile(workbook, fileName + '.xlsx');
            }
            exportToExcel(r.data, 'PADRES_TEMPLO_DE_LA_MODA_S_A_S', 'Sheet1');
        })
        .catch(function (error) {
            alert("Ocurrio un error!");
            window.location = "";
        })
        .finally(function () {
          // siempre sera executado
        });



})
