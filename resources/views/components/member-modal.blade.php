<!-- Add Form Modal -->
<div class="modal fade" id="addMemberModal" tabindex="-1" aria-labelledby="addMemberModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header w-100">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Add Member</h1>
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
                <div class="member-avatar">
                    <div class="avatar">
                        <img src="assets/img/user.png" alt="" id="profile-pic">
                    </div>
                    <div class="">
                        <div class="avatar-control">

                            <input type="file" style="display: none;" accept="image/jpeg, image/png, image/jpg"
                                id="input-pic" />

                            <input type="button" class="upload-avatar primary-button" value="Upload Avatar"
                                onclick="document.getElementById('input-pic').click();" />

                            <button type="button" class="delete-avatar-btn" id="delete-avatar-btn">Delete</button>
                        </div>
                        <label class="mb-0 pt-2 pt-md-3">Avatar help your teammates recognize you in Inagatahub</label>
                    </div>
                </div>
                <form action="" class="add-form pt-4">
                    <div class="w-100">
                        <label for="">Name</label>
                        <div class="w-100">
                            <input type="text" class="" placeholder="">
                        </div>
                    </div>
                    <div class="d-block d-md-flex w-100 pt-3 align-items-center justify-content-between gap-4">
                        <div class="w-100">
                            <label for="">School/University</label>
                            <input type="text" class="" placeholder="">
                        </div>
                        <div class="w-100 pt-md-0 pt-3">
                            <label for="">Start From (Date dd/mm/yyyy)</label>
                            <div class="date">
                                <i class="">
                                    <svg width="26" height="26" viewBox="0 0 26 26" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M16.934 1.59277C17.3633 1.59277 17.7118 1.94122 17.7118 2.37055L17.7122 3.24976C19.2264 3.35358 20.484 3.87223 21.3741 4.76414C22.3458 5.73999 22.857 7.1431 22.8519 8.82621V18.2871C22.8519 21.7425 20.6575 23.8892 17.1263 23.8892H8.35509C4.82398 23.8892 2.62961 21.7124 2.62961 18.2083V8.82414C2.62961 5.56493 4.58655 3.47286 7.77817 3.25012L7.77881 2.37055C7.77881 1.94122 8.12725 1.59277 8.55659 1.59277C8.98592 1.59277 9.33436 1.94122 9.33436 2.37055L9.33405 3.23026H16.1557L16.1562 2.37055C16.1562 1.94122 16.5046 1.59277 16.934 1.59277ZM21.2963 10.8266H4.18516V18.2083C4.18516 20.8693 5.66605 22.3336 8.35509 22.3336H17.1263C19.8154 22.3336 21.2963 20.8963 21.2963 18.2871L21.2963 10.8266ZM17.3568 17.3519C17.7861 17.3519 18.1346 17.7003 18.1346 18.1297C18.1346 18.559 17.7861 18.9075 17.3568 18.9075C16.9274 18.9075 16.5749 18.559 16.5749 18.1297C16.5749 17.7003 16.9181 17.3519 17.3474 17.3519H17.3568ZM12.7549 17.3519C13.1843 17.3519 13.5327 17.7003 13.5327 18.1297C13.5327 18.559 13.1843 18.9075 12.7549 18.9075C12.3256 18.9075 11.973 18.559 11.973 18.1297C11.973 17.7003 12.3163 17.3519 12.7456 17.3519H12.7549ZM8.14343 17.3519C8.57276 17.3519 8.92121 17.7003 8.92121 18.1297C8.92121 18.559 8.57276 18.9075 8.14343 18.9075C7.7141 18.9075 7.36047 18.559 7.36047 18.1297C7.36047 17.7003 7.70476 17.3519 8.1341 17.3519H8.14343ZM17.3568 13.3212C17.7861 13.3212 18.1346 13.6697 18.1346 14.099C18.1346 14.5284 17.7861 14.8768 17.3568 14.8768C16.9274 14.8768 16.5749 14.5284 16.5749 14.099C16.5749 13.6697 16.9181 13.3212 17.3474 13.3212H17.3568ZM12.7549 13.3212C13.1843 13.3212 13.5327 13.6697 13.5327 14.099C13.5327 14.5284 13.1843 14.8768 12.7549 14.8768C12.3256 14.8768 11.973 14.5284 11.973 14.099C11.973 13.6697 12.3163 13.3212 12.7456 13.3212H12.7549ZM8.14343 13.3212C8.57276 13.3212 8.92121 13.6697 8.92121 14.099C8.92121 14.5284 8.57276 14.8768 8.14343 14.8768C7.7141 14.8768 7.36047 14.5284 7.36047 14.099C7.36047 13.6697 7.70476 13.3212 8.1341 13.3212H8.14343ZM16.1557 4.78581H9.33405L9.33436 5.78344C9.33436 6.21277 8.98592 6.56122 8.55659 6.56122C8.12725 6.56122 7.77881 6.21277 7.77881 5.78344L7.77826 4.80935C5.45505 5.00451 4.18516 6.41277 4.18516 8.82414V9.271H21.2963L21.2963 8.82414C21.3004 7.5434 20.9561 6.54784 20.2727 5.8634C19.6728 5.26172 18.7958 4.90237 17.7126 4.80985L17.7118 5.78344C17.7118 6.21277 17.3633 6.56122 16.934 6.56122C16.5046 6.56122 16.1562 6.21277 16.1562 5.78344L16.1557 4.78581Z"
                                            fill="#747474" />
                                    </svg>

                                </i>
                                <input type="date" class="" id="" placeholder="2021/11/10">
                            </div>
                        </div>
                    </div>
                    <div class="d-block d-md-flex w-100 pt-3 align-items-center justify-content-between gap-4">
                        <div class="w-100">
                            <label for="">Intern Career</label>
                            <div class="select-box">
                                <div class="select-box__current" tabindex="1">
                                    <div class="select-box__value"><input class="select-box__input" type="radio"
                                            id="0" value="1" name="career" checked="checked" />
                                        <p onclick="selectfocuss(this);" class="select-box__input-text"
                                            id="placeholder">Select Intern
                                            Career</p>
                                    </div>
                                    <div class="select-box__value"><input class="select-box__input" type="radio"
                                            id="fed" value="2" name="career" />
                                        <p onclick="selectfocuss(this);" class="select-box__input-text">Frontend
                                            Development</p>
                                    </div>
                                    <div class="select-box__value"><input class="select-box__input" type="radio"
                                            id="bed" value="3" name="career" />
                                        <p onclick="selectfocuss(this);" class="select-box__input-text">Backend
                                            Development</p>
                                    </div>
                                    <div class="select-box__value"><input class="select-box__input" type="radio"
                                            id="mod" value="4" name="career" />
                                        <p onclick="selectfocuss(this);" class="select-box__input-text">Mobile
                                            Development</p>
                                    </div>
                                    <div class="select-box__value"><input class="select-box__input" type="radio"
                                            id="uid" value="5" name="career" />
                                        <p onclick="selectfocuss(this);" class="select-box__input-text">UI/UX Design
                                        </p>
                                    </div>
                                    {{-- <img class="select-box__icon" src="http://cdn.onlinewebfonts.com/svg/img_295694.svg"
                                        alt="Arrow Icon" aria-hidden="true" /> --}}
                                    <svg class="select-box__icon" width="26" height="26" viewBox="0 0 26 26"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M5.19076 8.82034C5.46689 8.54421 5.89898 8.5191 6.20347 8.74503L6.2907 8.82034L13 15.5293L19.7093 8.82034C19.9854 8.54421 20.4175 8.5191 20.722 8.74503L20.8092 8.82034C21.0853 9.09646 21.1105 9.52856 20.8845 9.83305L20.8092 9.92028L13.55 17.1795C13.2738 17.4557 12.8417 17.4808 12.5373 17.2548L12.45 17.1795L5.19076 9.92028C4.88702 9.61654 4.88702 9.12408 5.19076 8.82034Z"
                                            fill="currentColor" />
                                    </svg>

                                </div>
                                <ul class="select-box__list">
                                    <li><label class="select-box__option" for="fed"
                                            aria-hidden="aria-hidden">Frontend
                                            Development
                                    </li>
                                    <li><label class="select-box__option" for="bed"
                                            aria-hidden="aria-hidden">Backend
                                            Development
                                    </li>
                                    <li><label class="select-box__option" for="mod"
                                            aria-hidden="aria-hidden">Mobile
                                            Development
                                    </li>
                                    <li><label class="select-box__option" for="uid"
                                            aria-hidden="aria-hidden">UI/UX Design
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="w-100 pt-md-0 pt-3">
                            <label for="">Level Access</label>
                            <div class="select-box">
                                <div class="select-box__current" tabindex="1">
                                    <div class="select-box__value"><input class="select-box__input" type="radio"
                                            id="0" value="1" name="level" checked="checked" />
                                        <p onclick="selectfocuss(this);" class="select-box__input-text"
                                            id="placeholder">
                                            Select Level
                                            Access</p>
                                    </div>
                                    <div class="select-box__value"><input class="select-box__input" type="radio"
                                            id="member" value="2" name="level" />
                                        <p onclick="selectfocuss(this);" class="select-box__input-text">Member</p>
                                    </div>
                                    <div class="select-box__value"><input class="select-box__input" type="radio"
                                            id="admin" value="3" name="level" />
                                        <p onclick="selectfocuss(this);" class="select-box__input-text">Admin</p>
                                    </div>
                                    <svg class="select-box__icon" width="26" height="26" viewBox="0 0 26 26"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M5.19076 8.82034C5.46689 8.54421 5.89898 8.5191 6.20347 8.74503L6.2907 8.82034L13 15.5293L19.7093 8.82034C19.9854 8.54421 20.4175 8.5191 20.722 8.74503L20.8092 8.82034C21.0853 9.09646 21.1105 9.52856 20.8845 9.83305L20.8092 9.92028L13.55 17.1795C13.2738 17.4557 12.8417 17.4808 12.5373 17.2548L12.45 17.1795L5.19076 9.92028C4.88702 9.61654 4.88702 9.12408 5.19076 8.82034Z"
                                            fill="currentColor" />
                                    </svg>

                                </div>
                                <ul class="select-box__list">
                                    <li><label class="select-box__option" for="member"
                                            aria-hidden="aria-hidden">Member
                                    </li>
                                    <li><label class="select-box__option" for="admin"
                                            aria-hidden="aria-hidden">Admin
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="w-100 pt-3">
                        <label for="">Email</label>
                        <div class="">
                            <input type="email" class="email" placeholder="Ex: Inagatahub@gmail.com" required>
                            <p class="input-warning email-error"></p>
                            {{-- 'warning' class is for invalid input --}}
                        </div>
                    </div>
                    <div class="w-100 pt-3">
                        <label for="">Password</label>
                        <div class="name-input">
                            <input type="password" class="" placeholder="3+ characters">
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

{{-- Edit Form --}}
<div class="modal fade" id="editMemberModal" tabindex="-1" aria-labelledby="editMemberModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header w-100">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Member</h1>
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
                <div class="member-avatar">
                    <div class="avatar">
                        <img src="assets/img/user.png" alt="" id="edit-profile-pic">
                    </div>
                    <div class="">
                        <div class="avatar-control">

                            <input type="file" style="display: none;" accept="image/jpeg, image/png, image/jpg"
                                id="edit-pic" />

                            <input type="button" class="upload-avatar primary-button" value="Upload Avatar"
                                onclick="document.getElementById('edit-pic').click();" />

                            <button type="button" class="delete-avatar-btn" id="delete-pic-btn">Delete</button>
                        </div>
                        <label class="mb-0 pt-2 pt-md-3">Avatar help your teammates recognize you in Inagatahub</label>
                    </div>
                </div>
                <form action="" class="add-form pt-4">
                    <div class="w-100">
                        <label for="">Name</label>
                        <div class="w-100">
                            <input type="text" class="" placeholder="">
                        </div>
                    </div>
                    <div class="d-block d-md-flex w-100 pt-3 align-items-center justify-content-between gap-4">
                        <div class="w-100">
                            <label for="">School/University</label>
                            <input type="text" class="" placeholder="">
                        </div>
                        <div class="w-100 pt-md-0 pt-3">
                            <label for="">Start From (Date dd/mm/yyyy)</label>
                            <div class="date">
                                <i class="">
                                    <svg width="26" height="26" viewBox="0 0 26 26" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M16.934 1.59277C17.3633 1.59277 17.7118 1.94122 17.7118 2.37055L17.7122 3.24976C19.2264 3.35358 20.484 3.87223 21.3741 4.76414C22.3458 5.73999 22.857 7.1431 22.8519 8.82621V18.2871C22.8519 21.7425 20.6575 23.8892 17.1263 23.8892H8.35509C4.82398 23.8892 2.62961 21.7124 2.62961 18.2083V8.82414C2.62961 5.56493 4.58655 3.47286 7.77817 3.25012L7.77881 2.37055C7.77881 1.94122 8.12725 1.59277 8.55659 1.59277C8.98592 1.59277 9.33436 1.94122 9.33436 2.37055L9.33405 3.23026H16.1557L16.1562 2.37055C16.1562 1.94122 16.5046 1.59277 16.934 1.59277ZM21.2963 10.8266H4.18516V18.2083C4.18516 20.8693 5.66605 22.3336 8.35509 22.3336H17.1263C19.8154 22.3336 21.2963 20.8963 21.2963 18.2871L21.2963 10.8266ZM17.3568 17.3519C17.7861 17.3519 18.1346 17.7003 18.1346 18.1297C18.1346 18.559 17.7861 18.9075 17.3568 18.9075C16.9274 18.9075 16.5749 18.559 16.5749 18.1297C16.5749 17.7003 16.9181 17.3519 17.3474 17.3519H17.3568ZM12.7549 17.3519C13.1843 17.3519 13.5327 17.7003 13.5327 18.1297C13.5327 18.559 13.1843 18.9075 12.7549 18.9075C12.3256 18.9075 11.973 18.559 11.973 18.1297C11.973 17.7003 12.3163 17.3519 12.7456 17.3519H12.7549ZM8.14343 17.3519C8.57276 17.3519 8.92121 17.7003 8.92121 18.1297C8.92121 18.559 8.57276 18.9075 8.14343 18.9075C7.7141 18.9075 7.36047 18.559 7.36047 18.1297C7.36047 17.7003 7.70476 17.3519 8.1341 17.3519H8.14343ZM17.3568 13.3212C17.7861 13.3212 18.1346 13.6697 18.1346 14.099C18.1346 14.5284 17.7861 14.8768 17.3568 14.8768C16.9274 14.8768 16.5749 14.5284 16.5749 14.099C16.5749 13.6697 16.9181 13.3212 17.3474 13.3212H17.3568ZM12.7549 13.3212C13.1843 13.3212 13.5327 13.6697 13.5327 14.099C13.5327 14.5284 13.1843 14.8768 12.7549 14.8768C12.3256 14.8768 11.973 14.5284 11.973 14.099C11.973 13.6697 12.3163 13.3212 12.7456 13.3212H12.7549ZM8.14343 13.3212C8.57276 13.3212 8.92121 13.6697 8.92121 14.099C8.92121 14.5284 8.57276 14.8768 8.14343 14.8768C7.7141 14.8768 7.36047 14.5284 7.36047 14.099C7.36047 13.6697 7.70476 13.3212 8.1341 13.3212H8.14343ZM16.1557 4.78581H9.33405L9.33436 5.78344C9.33436 6.21277 8.98592 6.56122 8.55659 6.56122C8.12725 6.56122 7.77881 6.21277 7.77881 5.78344L7.77826 4.80935C5.45505 5.00451 4.18516 6.41277 4.18516 8.82414V9.271H21.2963L21.2963 8.82414C21.3004 7.5434 20.9561 6.54784 20.2727 5.8634C19.6728 5.26172 18.7958 4.90237 17.7126 4.80985L17.7118 5.78344C17.7118 6.21277 17.3633 6.56122 16.934 6.56122C16.5046 6.56122 16.1562 6.21277 16.1562 5.78344L16.1557 4.78581Z"
                                            fill="#747474" />
                                    </svg>

                                </i>
                                <input type="date" class="" id="" placeholder="2021/11/10">
                            </div>
                        </div>
                    </div>
                    <div class="d-block d-md-flex  w-100 pt-3 align-items-center justify-content-between gap-4">
                        <div class="w-100">
                            <label for="">Intern Career</label>
                            <div class="select-box">
                                <div class="select-box__current" tabindex="1">
                                    <div class="select-box__value"><input class="select-box__input" type="radio"
                                            id="0" value="1" name="career" checked="checked" />
                                        <p onclick="selectfocuss(this);" class="select-box__input-text"
                                            id="placeholder">Select Intern
                                            Career</p>
                                    </div>
                                    <div class="select-box__value"><input class="select-box__input" type="radio"
                                            id="fedev" value="2" name="career" />
                                        <p onclick="selectfocuss(this);" class="select-box__input-text">Frontend
                                            Development</p>
                                    </div>
                                    <div class="select-box__value"><input class="select-box__input" type="radio"
                                            id="bedev" value="3" name="career" />
                                        <p onclick="selectfocuss(this);" class="select-box__input-text">Backend
                                            Development</p>
                                    </div>
                                    <div class="select-box__value"><input class="select-box__input" type="radio"
                                            id="modev" value="4" name="career" />
                                        <p onclick="selectfocuss(this);" class="select-box__input-text">Mobile
                                            Development</p>
                                    </div>
                                    <div class="select-box__value"><input class="select-box__input" type="radio"
                                            id="uide" value="5" name="career" />
                                        <p onclick="selectfocuss(this);" class="select-box__input-text">UI/UX Design
                                        </p>
                                    </div>
                                    {{-- <img class="select-box__icon" src="http://cdn.onlinewebfonts.com/svg/img_295694.svg"
                                        alt="Arrow Icon" aria-hidden="true" /> --}}
                                    <svg class="select-box__icon" width="26" height="26" viewBox="0 0 26 26"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M5.19076 8.82034C5.46689 8.54421 5.89898 8.5191 6.20347 8.74503L6.2907 8.82034L13 15.5293L19.7093 8.82034C19.9854 8.54421 20.4175 8.5191 20.722 8.74503L20.8092 8.82034C21.0853 9.09646 21.1105 9.52856 20.8845 9.83305L20.8092 9.92028L13.55 17.1795C13.2738 17.4557 12.8417 17.4808 12.5373 17.2548L12.45 17.1795L5.19076 9.92028C4.88702 9.61654 4.88702 9.12408 5.19076 8.82034Z"
                                            fill="currentColor" />
                                    </svg>

                                </div>
                                <ul class="select-box__list">
                                    <li><label class="select-box__option" for="fedev"
                                            aria-hidden="aria-hidden">Frontend
                                            Development
                                    </li>
                                    <li><label class="select-box__option" for="bedev"
                                            aria-hidden="aria-hidden">Backend
                                            Development
                                    </li>
                                    <li><label class="select-box__option" for="modev"
                                            aria-hidden="aria-hidden">Mobile
                                            Development
                                    </li>
                                    <li><label class="select-box__option" for="uide"
                                            aria-hidden="aria-hidden">UI/UX Design
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="w-100 pt-md-0 pt-3">
                            <label for="">Level Access</label>
                            <div class="select-box">
                                <div class="select-box__current" tabindex="1">
                                    <div class="select-box__value"><input class="select-box__input" type="radio"
                                            id="0" value="1" name="level" checked="checked" />
                                        <p onclick="selectfocuss(this);" class="select-box__input-text"
                                            id="placeholder">
                                            Select Level
                                            Access</p>
                                    </div>
                                    <div class="select-box__value"><input class="select-box__input" type="radio"
                                            id="lvlmember" value="2" name="level" />
                                        <p onclick="selectfocuss(this);" class="select-box__input-text">Member</p>
                                    </div>
                                    <div class="select-box__value"><input class="select-box__input" type="radio"
                                            id="lvladmin" value="3" name="level" />
                                        <p onclick="selectfocuss(this);" class="select-box__input-text">Admin</p>
                                    </div>
                                    <svg class="select-box__icon" width="26" height="26" viewBox="0 0 26 26"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M5.19076 8.82034C5.46689 8.54421 5.89898 8.5191 6.20347 8.74503L6.2907 8.82034L13 15.5293L19.7093 8.82034C19.9854 8.54421 20.4175 8.5191 20.722 8.74503L20.8092 8.82034C21.0853 9.09646 21.1105 9.52856 20.8845 9.83305L20.8092 9.92028L13.55 17.1795C13.2738 17.4557 12.8417 17.4808 12.5373 17.2548L12.45 17.1795L5.19076 9.92028C4.88702 9.61654 4.88702 9.12408 5.19076 8.82034Z"
                                            fill="currentColor" />
                                    </svg>

                                </div>
                                <ul class="select-box__list">
                                    <li><label class="select-box__option" for="lvlmember"
                                            aria-hidden="aria-hidden">Member
                                    </li>
                                    <li><label class="select-box__option" for="lvladmin"
                                            aria-hidden="aria-hidden">Admin
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="w-100 pt-3">
                        <label for="">Email</label>
                        <div class="">
                            <input type="email" class="email" id="email" required>
                            <p class="input-warning email-error" id="email-error"></p>
                            {{-- 'warning' class is for invalid input --}}
                        </div>
                    </div>
                    <div class="w-100 pt-3">
                        <label for="">Password</label>
                        <div class="name-input">
                            <input type="password" class="" placeholder="3+ characters">
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
