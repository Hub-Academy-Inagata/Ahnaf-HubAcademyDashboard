<!-- add Modal -->
<div class="modal fade" id="addShowcaseModal" tabindex="-1" aria-labelledby="addShowcaseModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header w-100">
                <h1 class="modal-title" id="exampleModalLabel">Add Showcase</h1>
                <button type="button" class="btn-closes" data-bs-dismiss="modal" aria-label="Close">
                    <i>
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M6.53033 5.46967C6.23744 5.17678 5.76256 5.17678 5.46967 5.46967C5.17678 5.76256 5.17678 6.23744 5.46967 6.53033L10.9393 12L5.46967 17.4697C5.17678 17.7626 5.17678 18.2374 5.46967 18.5303C5.76256 18.8232 6.23744 18.8232 6.53033 18.5303L12 13.0607L17.4697 18.5303C17.7626 18.8232 18.2374 18.8232 18.5303 18.5303C18.8232 18.2374 18.8232 17.7626 18.5303 17.4697L13.0607 12L18.5303 6.53033C18.8232 6.23744 18.8232 5.76256 18.5303 5.46967C18.2374 5.17678 17.7626 5.17678 17.4697 5.46967L12 10.9393L6.53033 5.46967Z"
                                fill="currentColor" />
                        </svg>
                    </i>
                </button>
            </div>
            <div class="modal-body w-100">
                <form action="" class="add-form">
                    <div class="w-100">
                        <label for="">Title</label>
                        <div class="">
                            <input type="text" class="" placeholder="">
                        </div>
                    </div>
                    <div class="w-100 pt-3">
                        <label for="">Image Upload *min 360px (Max 5 mb)</label>
                        <input type="file" name="" id="" class="file-input">
                        {{-- Use class 'warning' in input tag for invalid input --}}
                        <p class="input-warning"></p>
                    </div>
                    <div class="w-100 pt-3">
                        <label for="">Link</label>
                        <div class="">
                            <input type="url" class="link-input" placeholder="Input link">
                            {{-- Use class 'warning' in input tag for invalid input --}}
                            <p class="input-warning link-invalid"></p>
                        </div>
                    </div>
                    <div class="w-100 pt-3">
                        <label for="">Author</label>
                        <div class="">
                            <div class="itemBox" for="itemInput">
                                <input type="text" id="itemInput" placeholder="">
                                <ul id="itemList">
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="w-100 pt-3">
                        <label for="">Category</label>
                        <div class="select-box">
                            <div class="select-box__current" tabindex="1">
                                <div class="select-box__value"><input class="select-box__input" type="radio"
                                        id="0" value="1" name="name" checked="checked" />
                                    <p onclick="selectfocuss(this);" class="select-box__input-text" id="placeholder">
                                        Select doc category
                                    </p>
                                </div>
                                <div class="select-box__value"><input class="select-box__input" type="radio"
                                        id="1" value="2" name="name" />
                                    <p onclick="selectfocuss(this);" class="select-box__input-text">Frontend
                                        Development</p>
                                </div>
                                <div class="select-box__value"><input class="select-box__input" type="radio"
                                        id="2" value="3" name="name" />
                                    <p onclick="selectfocuss(this);" class="select-box__input-text">Backend
                                        Development</p>
                                </div>
                                <div class="select-box__value"><input class="select-box__input" type="radio"
                                        id="3" value="4" name="name" />
                                    <p onclick="selectfocuss(this);" class="select-box__input-text">Mobile
                                        Development</p>
                                </div>
                                <div class="select-box__value"><input class="select-box__input" type="radio"
                                        id="4" value="5" name="name" />
                                    <p onclick="selectfocuss(this);" class="select-box__input-text">UI/UX Design</p>
                                </div>
                                <svg class="select-box__icon" width="26" height="26" viewBox="0 0 26 26"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M5.19076 8.82034C5.46689 8.54421 5.89898 8.5191 6.20347 8.74503L6.2907 8.82034L13 15.5293L19.7093 8.82034C19.9854 8.54421 20.4175 8.5191 20.722 8.74503L20.8092 8.82034C21.0853 9.09646 21.1105 9.52856 20.8845 9.83305L20.8092 9.92028L13.55 17.1795C13.2738 17.4557 12.8417 17.4808 12.5373 17.2548L12.45 17.1795L5.19076 9.92028C4.88702 9.61654 4.88702 9.12408 5.19076 8.82034Z"
                                        fill="currentColor" />
                                </svg>

                            </div>
                            <ul class="select-box__list">
                                <li><label class="select-box__option" for="1"
                                        aria-hidden="aria-hidden">Frontend
                                        Development
                                </li>
                                <li><label class="select-box__option" for="2"
                                        aria-hidden="aria-hidden">Backend
                                        Development
                                </li>
                                <li><label class="select-box__option" for="3" aria-hidden="aria-hidden">Mobile
                                        Development
                                </li>
                                <li><label class="select-box__option" for="4" aria-hidden="aria-hidden">UI/UX
                                        Design
                                </li>
                            </ul>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer w-100">
                <button type="button" class="btn cancel-btn mb-0" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn save-btn mb-0 me-0">Submit</button>
            </div>
        </div>
    </div>
</div>

{{-- edit modal --}}
<div class="modal fade" id="editShowcaseModal" tabindex="-1" aria-labelledby="editShowcaseModal"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header w-100">
                <h1 class="modal-title" id="exampleModalLabel">Edit Showcase</h1>
                <button type="button" class="btn-closes" data-bs-dismiss="modal" aria-label="Close">
                    <i>
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M6.53033 5.46967C6.23744 5.17678 5.76256 5.17678 5.46967 5.46967C5.17678 5.76256 5.17678 6.23744 5.46967 6.53033L10.9393 12L5.46967 17.4697C5.17678 17.7626 5.17678 18.2374 5.46967 18.5303C5.76256 18.8232 6.23744 18.8232 6.53033 18.5303L12 13.0607L17.4697 18.5303C17.7626 18.8232 18.2374 18.8232 18.5303 18.5303C18.8232 18.2374 18.8232 17.7626 18.5303 17.4697L13.0607 12L18.5303 6.53033C18.8232 6.23744 18.8232 5.76256 18.5303 5.46967C18.2374 5.17678 17.7626 5.17678 17.4697 5.46967L12 10.9393L6.53033 5.46967Z"
                                fill="currentColor" />
                        </svg>
                    </i>
                </button>
            </div>
            <div class="modal-body w-100">
                <form action="" class="add-form">
                    <div class="w-100">
                        <label for="">Title</label>
                        <div class="">
                            <input type="text" class="" placeholder="">
                        </div>
                    </div>
                    <div class="w-100 pt-3">
                        <label for="">Image Upload *min 360px (Max 5 mb)</label>
                        <input type="file" name="" id="" class="">
                        {{-- Use class 'warning' in input tag for invalid input --}}
                        <p class="input-warning"></p>
                    </div>
                    <div class="w-100 pt-3">
                        <label for="">Link</label>
                        <div class="">
                            <div class="">
                                <input type="url" class="link-input" placeholder="Input link">
                                {{-- Use class 'warning' in input tag for invalid input --}}
                                <p class="input-warning link-invalid"></p>
                            </div>
                        </div>
                    </div>
                    <div class="w-100 pt-3">
                        <label for="">Author</label>
                        <div class="">
                            <div class="itemBox" for="itemInput">
                                <input type="text" id="itemInput" placeholder="">
                                <ul id="itemList">
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="w-100 pt-3">
                        <label for="">Category</label>
                        <div class="select-box">
                            <div class="select-box__current" tabindex="1">
                                <div class="select-box__value"><input class="select-box__input" type="radio"
                                        id="0" value="1" name="name" checked="checked" />
                                    <p onclick="selectfocuss(this);" class="select-box__input-text" id="placeholder">
                                        Select doc category
                                    </p>
                                </div>
                                <div class="select-box__value"><input class="select-box__input" type="radio"
                                        id="fe" value="2" name="name" />
                                    <p onclick="selectfocuss(this);" class="select-box__input-text">Frontend
                                        Development</p>
                                </div>
                                <div class="select-box__value"><input class="select-box__input" type="radio"
                                        id="be" value="3" name="name" />
                                    <p onclick="selectfocuss(this);" class="select-box__input-text">Backend
                                        Development</p>
                                </div>
                                <div class="select-box__value"><input class="select-box__input" type="radio"
                                        id="md" value="4" name="name" />
                                    <p onclick="selectfocuss(this);" class="select-box__input-text">Mobile
                                        Development</p>
                                </div>
                                <div class="select-box__value"><input class="select-box__input" type="radio"
                                        id="ui" value="5" name="name" />
                                    <p onclick="selectfocuss(this);" class="select-box__input-text">UI/UX Design</p>
                                </div>
                                <svg class="select-box__icon" width="26" height="26" viewBox="0 0 26 26"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M5.19076 8.82034C5.46689 8.54421 5.89898 8.5191 6.20347 8.74503L6.2907 8.82034L13 15.5293L19.7093 8.82034C19.9854 8.54421 20.4175 8.5191 20.722 8.74503L20.8092 8.82034C21.0853 9.09646 21.1105 9.52856 20.8845 9.83305L20.8092 9.92028L13.55 17.1795C13.2738 17.4557 12.8417 17.4808 12.5373 17.2548L12.45 17.1795L5.19076 9.92028C4.88702 9.61654 4.88702 9.12408 5.19076 8.82034Z"
                                        fill="currentColor" />
                                </svg>

                            </div>
                            <ul class="select-box__list">
                                <li><label class="select-box__option" for="fe"
                                        aria-hidden="aria-hidden">Frontend
                                        Development
                                </li>
                                <li><label class="select-box__option" for="be"
                                        aria-hidden="aria-hidden">Backend
                                        Development
                                </li>
                                <li><label class="select-box__option" for="md" aria-hidden="aria-hidden">Mobile
                                        Development
                                </li>
                                <li><label class="select-box__option" for="ui" aria-hidden="aria-hidden">UI/UX
                                        Design
                                </li>
                            </ul>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer w-100">
                <button type="button" class="btn cancel-btn mb-0" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn save-btn mb-0 me-0">Save</button>
            </div>
        </div>
    </div>
</div>
