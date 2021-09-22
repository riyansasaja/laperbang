$(document).ready(function () {
    const path = `../../`;
    $('#modalPdf').on('show.bs.modal', function (e) {
        let getdata = $(e.relatedTarget).data('id');
        let tampil = `<embed src="${path}/fileuploads/${getdata}" type="application/pdf" width="100%" height="100%">`
        $('#tampil').html(tampil);
    })

    //untuk validasi upload

    max1 = 1*1024*1024;
    max10 = 10*1024*1024;
    max20 = 20*1024*1024;
    max80 = 80*1024*1024;

      //Maximum File Size 1mb
      $('.max1').change(function () { 
        let fileSize = this.files[0].size;

        if (fileSize > max1) {
            this.setCustomValidity("Batas Maximum File 1Mb")
            this.reportValidity();
        } else {
            this.setCustomValidity("");
        }
        
    });

    //Maximum File Size 5mb
    $('.max10').change(function () { 
        let fileSize = this.files[0].size;

        if (fileSize > max10) {
            this.setCustomValidity("Batas Maximum File 10Mb")
            this.reportValidity();
        } else {
            this.setCustomValidity("");
        }
        
    });


    //Maximum File Size 20mb
    $('.max20').change(function () { 
        let fileSize = this.files[0].size;

        if (fileSize > max20) {
            this.setCustomValidity("Batas Maximum File 20Mb")
            this.reportValidity();
        } else {
            this.setCustomValidity("");
        }
        
    });

      //Maximum File Size 50mb
      $('.max80').change(function () { 
        let fileSize = this.files[0].size;

        if (fileSize > max80) {
            this.setCustomValidity("Batas Maximum File 80Mb")
            this.reportValidity();
        } else {
            this.setCustomValidity("");
        }
        
    });





});