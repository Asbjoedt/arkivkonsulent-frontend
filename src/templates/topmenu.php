<div class="arc-topmenu-container">
    <div class="arc-topmenu">
        <ul>
            <li class="arc-topmenu-dropdown">
                <button class="arc-topmenu-button" @onclick="@LinkHomeMetadata">Metadata</button>
                <div class="arc-topmenu-dropdown-content">
                    <button class="arc-topmenu-dropdown-content-button" @onclick="@LinkVisArchiveIndex">Vis archiveIndex</button>
                    <button class="arc-topmenu-dropdown-content-button" @onclick="@LinkOpretArchiveIndex">Opret archiveIndex</button>
                    <button class="arc-topmenu-dropdown-content-button" @onclick="@LinkRedigerArchiveIndex">Rediger archiveIndex</button>
                </div>
            </li>
            <li class="arc-topmenu-dropdown">
                <button class="arc-topmenu-dropdown-button" @onclick="@LinkHomeRegneark">Regneark</button>
                <div class="arc-topmenu-dropdown-content">
                    <button class="arc-topmenu-dropdown-content-button" @onclick="@LinkKonverterRegneark">Konverter regneark</button>
                    <button class="arc-topmenu-dropdown-content-button" @onclick="@LinkValiderRegneark">Valider regneark</button>
                </div>
            </li>
            <li><button class="arc-topmenu-button" @onclick="@LinkHomeSurveyData">Survey data</button></li>
            <li><button class="arc-topmenu-button" @onclick="@LinkServicevilkaar">Servicevilkår</button></li>
            <li><button class="arc-topmenu-button" @onclick="@LinkDatabeskyttelse">Databeskyttelse</button></li>
        </ul>
    </div>
</div>