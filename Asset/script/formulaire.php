<?php 
echo'
     <div class="myform">
     <div>
         <form action="" class="formconfig">
             <label for="nom">Nom <em>*</em></label>
             <input id="nom" placeholder="Olivier Serre" autofocus="" required=""><br>
             <label for="telephone">Portable</label>
             <input id="telephone" type="tel" placeholder="06xxxxxxxx" pattern="06[0-9]{8}"><br>
             <label for="email">Email <em>*</em></label>
             <input id="email" type="email" placeholder="prenom.nom@polytechnique.edu" required=""
                 pattern="[a-zA-Z]*.[a-zA-Z]*@polytechnique.edu"><br>
             <label for="age">Age<em>*</em></label>
             <input id="age" type="number" placeholder="xx" pattern="[0-9]{2}" required=""><br>
             <label for="sexe">Sexe</label>
             <select id="sexe">
                 <option value="F" name="sexe">Femme</option>
                 <option value="H" name="sexe">Homme</option>
             </select><br>
             <label for="comments">Ticket :</label>
             <textarea id="comments"></textarea>
             <p><input type="submit" value="Soumettre"></p>
         </form>
     </div>
 </div>
 <div class="bodyseparator"></div>
 ';
?>