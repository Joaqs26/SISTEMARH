<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true" id="is_modal_config_asistencia">
    <div class="modal-dialog modal-lg modal-dialog-centered" style="max-width: 700px;">
        <div class="modal-content">
            <div class="modal-header background-modal">
                <div class="container">
                    <div class="row">
                        <div class="col-2">
                            <img src="../../../../assets/sirh/logo_actualizar.png"
                                style="max-width: 150%;margin-top: 0px;">
                        </div>
                        <div class="col-10">
                            <h1 class="text-tittle-card"><label id=""></label>
                                Actualizar información.
                            </h1>
                            <p class="color-text-white">Actualiza la información sobre la configuración del dispositivo
                                biométrico y la jornada asignada al empleado.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="div-spacing"></div>
            <div class="card-body">
                <div class="container">


                    <div class="row">
                        <div class="col-6">
                            <label for="campo" class="form-label input-text-form text-input-rem">No en
                                biométrico</label><label class="text-required">*</label>
                            <input type="number" class="form-control custom-input" id="correo_electronic12o"
                                placeholder="Id asignado por biométrico">
                            <div class="line"></div>
                        </div>
                        <div class="col-6">
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="campo" class="form-label input-text-form text-input-rem">Estatus</label>
                                    <label class="text-required">*</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <select class="form-control custom-select selectpicker"
                                        data-style="input-select-selectpicker" aria-label="Default select example"
                                        data-live-search="true" id="" data-none-results-text="Sin resultados">
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="div-spacing"></div>
                    <div class="row">
                        <div class="col-6">
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="campo" class="form-label input-text-form text-input-rem">Turno</label>
                                    <label class="text-required">*</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <select class="form-control custom-select selectpicker"
                                        data-style="input-select-selectpicker" aria-label="Default select example"
                                        data-live-search="true" id="" data-none-results-text="Sin resultados">
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="campo" class="form-label input-text-form text-input-rem">Jornada</label>
                                    <label class="text-required">*</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <select class="form-control custom-select selectpicker"
                                        data-style="input-select-selectpicker" aria-label="Default select example"
                                        data-live-search="true" id="" data-none-results-text="Sin resultados">
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="div-spacing"></div>
                    <div class="row">
                        <div class="col-6">
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="campo" class="form-label input-text-form text-input-rem">Horario</label>
                                    <label class="text-required">*</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <select class="form-control custom-select selectpicker"
                                        data-style="input-select-selectpicker" aria-label="Default select example"
                                        data-live-search="true" id="" data-none-results-text="Sin resultados">
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="campo" class="form-label input-text-form text-input-rem">Ubicaci&oacuten</label>
                                    <label class="text-required">*</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <select class="form-control custom-select selectpicker"
                                        data-style="input-select-selectpicker" aria-label="Default select example"
                                        data-live-search="true" id="" data-none-results-text="Sin resultados">
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="div-spacing"></div>
                    <div class="row">
                        <div class="col-12">
                            <label for="campo"
                                class="form-label input-text-form text-input-rem">Observaciones</label><label
                                class="text-required"></label>
                            <input type="text" class="form-control custom-input"
                                onkeyup="convertirAMayusculas(event,'observaciones_ass')" id="observaciones_ass"
                                placeholder="Observaciones" maxlength="25">
                            <div class="line"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="div-spacing"></div>
            <div class="modal-footer">
                <button onclick="ocultarModalConfigAsistencia();" type="button" class="btn btn-secondary"
                    data-dismiss="modal"><i class="fas fa-times"></i> Cancelar</button>
                <button type="button" class="btn btn-success save-botton-modal" onclick="return validarCorreo();"><i
                        class="fas fa-save"></i> Guardar</button>
                <input type="hidden" id="id_object">
            </div>
        </div>
    </div>
</div>