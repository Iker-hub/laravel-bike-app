/* global $ */
(function () {

    $('#modalDelete').on('show.bs.modal', function (event) {
        let element = event.relatedTarget;
        let action = element.getAttribute('data-url');
        //let action = element.dataset.url;
        let name = element.dataset.name;
        let form = document.getElementById('modalDeleteResourceForm');
        form.action = action;
        $('#deleteBike').text(name);
    });

})();   