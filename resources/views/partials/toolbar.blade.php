<div class="toolbar">
    <ul class="tool-list">
        <li class="tool">
            <button type="button" data-command='justifyLeft' class="tool--btn">
                <i class=' fas fa-align-left'></i>
            </button>
        </li>
        <li class="tool">
            <button type="button" data-command='justifyCenter' class="tool--btn">
                <i class=' fas fa-align-center'></i>
            </button>
        </li>
        <li class="tool">
            <button type="button" data-command="bold" class="tool--btn">
                <i class=' fas fa-bold'></i>
            </button>
        </li>
        <li class="tool">
            <button type="button" data-command="italic" class="tool--btn">
                <i class=' fas fa-italic'></i>
            </button>
        </li>
        <li class="tool">
            <button type="button" data-command="underline" class="tool--btn">
                <i class=' fas fa-underline'></i>
            </button>
        </li>
        <li class="tool">
            <button type="button" data-command="insertOrderedList" class="tool--btn">
                <i class=' fas fa-list-ol'></i>
            </button>
        </li>
        <li class="tool">
            <button type="button" data-command="insertUnorderedList" class="tool--btn">
                <i class=' fas fa-list-ul'></i>
            </button>
        </li>
        <li class="tool">
            <button type="button" data-command="createlink" class="tool--btn">
                <i class=' fas fa-link'></i>
            </button>
        </li>
        <li class="tool">
            <select onchange="execVal('fontName',this.value)">
                <option value="Arial">Arial</option>
                <option value="Comic Sans MS">Comic Sans MS</option>
                <option value="Courier">Courier</option>
                <option value="Georgia">Georgia</option>
                <option value="Tahoma">Tahoma</option>
                <option value="Times New Roman">Times New Roman</option>
                <option value="Verdana">Verdana</option>
                <option value="Poppins">Poppins</option>
                <option value="Helvetica">Helvetica</option>
                <option value="Cursive">Cursive</option>
                <option value="Lucida Sans Unicode">Lucida Sans Unicode</option>
            </select>
        </li>
        <li class="tool">
            <select onchange="execVal('fontSize', this.value)">
                <option value="5">5</option>
                <option value="10">10</option>
                <option value="15">15</option>
                <option value="20">20</option>
                <option value="25">25</option>
                <option value="30">30</option>
                <option value="35">35</option>
                <option value="40">40</option>
                <option value="45">45</option>
                <option value="50">50</option>
                <option value="55">55</option>
                <option value="60">60</option>
                <option value="65">65</option>
            </select>
        </li>
    </ul>
</div>