function changeType(){

    selected = document.querySelector('#productType');
    switch(selected.value){
        case 'Dvd':
            appended.innerHTML = 
            `<label for="size">Size (MB)</label>
            <input class="form-inputs" type="number" name="size" id="size" required>
            
            <p style="font-size: small; color:#f95959;"> Please, provide the DVD's capacity in MB</p>`;
            break;
        
        
        case 'Book':
            appended.innerHTML = 
            `<label for="weight">Weight (KG)</label>
            <input class="form-inputs" type="number" name="weight" id="weight" required>
            
            <p style="font-size: small; color:#f95959;"> Please, provide the book's weight in KG</p>`;
            break;
        case 'Furniture':
            appended.innerHTML = 
            `<label for="height">Height (CM)</label>
            <input class="form-inputs" type="number" name="height" id="height" required>
            
            
            <label for="width">Width (CM)</label>
            <input class="form-inputs" type="number" name="width" id="width" required>
            
            <label for="length">Length (CM)</label>
            <input class="form-inputs" type="number" name="length" id="length" required>
            
            <p style="font-size: small; color:#f95959;"> Please, provide the dimensions in HxWxL format</p>`;
            break;
    }
}