<fieldset>
    <legend><h1>Muusika küsitlus</h1></legend>
    <form id="muusikaVorm">
        <table id="table1">
            <!-- 1. Muusikud -->
            <tr>
                <td>
                    Milliseid muusikuid/ansambleid sa tead?<br>
                    <input type="checkbox" id="muusik1" name="muusik" value="The weeknd" onchange="valiMuusikud()">
                    <label for="muusik1">The weeknd</label><br>
                    <input type="checkbox" id="muusik2" name="muusik" value="Yanix" onchange="valiMuusikud()">
                    <label for="muusik2">Yanix</label><br>
                    <input type="checkbox" id="muusik3" name="muusik" value="Mayot" onchange="valiMuusikud()">
                    <label for="muusik3">Mayot</label><br>
                    <input type="checkbox" id="muusik4" name="muusik" value="OG Buda" onchange="valiMuusikud()">
                    <label for="muusik4">OG Buda</label>
                </td>
                <td><div id="vastus1"></div></td>
            </tr>

            <!-- 2. Arvamus -->
            <tr>
                <td>
                    <label for="arvamus">Mida arvad muusika kuulamisest koolis?</label><br>
                    <textarea id="arvamus" rows="4" cols="30" oninput="valiArvamus()"></textarea>
                </td>
                <td><div id="vastus2"></div></td>
            </tr>

            <!-- 3. Mitu tundi kuulad -->
            <tr>
                <td>
                    <label for="tunnid">Mitu tundi päevas sa kuulad muusikat?</label><br>
                    <input type="number" id="tunnid" min="0" max="24" onchange="valiKuulamisaeg()">
                </td>
                <td><div id="vastus3"></div></td>
            </tr>

            <!-- 4. Kuulad raadiot -->
            <tr>
                <td>
                    Kas sa kuulad raadiot?<br>
                    <input type="radio" id="jah" name="raadio" value="Jah" onchange="valiRaadio()">
                    <label for="jah">Jah</label>
                    <input type="radio" id="ei" name="raadio" value="Ei" onchange="valiRaadio()">
                    <label for="ei">Ei</label>
                </td>
                <td><div id="vastus4"></div></td>
            </tr>
            <!-- 5. Raadiojaamad -->
            <tr>
                <td>
                    <label for="jaamad">Milliseid raadiojaamu oskad nimetada?</label><br>
                    <input type="text" id="jaamad" placeholder="Sky Plus..." oninput="valiJaamad()">
                </td>
                <td><div id="vastus5"></div></td>
            </tr>
            <!-- 6. Muusika stiilid -->
            <tr>
                <td>
                    <label for="stiil">Millist muusikat sa kõige rohkem kuulad?</label><br>
                    <select id="stiil" onchange="valiStiil()">
                        <option value="">Vali stiil</option>
                        <option value="Pop">Pop</option>
                        <option value="Rock">Rock</option>
                        <option value="Hip-Hop">Hip-Hop</option>
                        <option value="Jazz">Jazz</option>
                        <option value="Klassikaline">Klassikaline</option>
                        <option value="Elektrooniline">Elektrooniline</option>
                    </select>
                </td>
                <td><div id="vastus6"></div></td>
            </tr>

            <!-- Nupud -->
            <tr>
                <td colspan="2">
                    <input type="button" value="Saada" onclick="kokkuvott()">
                    <input type="button" value="Puhasta" onclick="puhasta()">
                </td>
            </tr>
        </table>
    </form>
    <div id="kokkuvote"></div>
</fieldset>
<fieldset>
    <legend><h1>Vastused</h1></legend>
    <form>
        <div id="vastused"></div>
    </form>
</fieldset>