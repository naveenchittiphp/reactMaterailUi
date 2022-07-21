Create a new component 

Lets define the box component.

For select component we have two options 
we can reuse the textfiled component or a special select component which mur provies.

<TextField label="Select Country"></TextField>
add the text field and add new option called select 

Now define a property to get and set state value.

const [state,setState] = useState();
assign the state as value to the dropdown.

<TextField label="Select Country" select value={state}  > 
  
Add a function to handel the state change.This function will take the event of type React.ChangeEvent<HTMLInputElement> as aurgment.
  
  
    function handleStateChange(event : React.ChangeEvent<HTMLInputElement>){
        
    }
      
   <TextField label="Select Country" select value={state} onChange={handleStateChange} > 
     
     We can see the select box is shrinking this is because select box size always changes with 
     size of component we selected .
     Since we gave the empty string the inital size of select box is very less.
     To fix this add a property of fullWidht 
     
     Multiple Select:
     ---------------
     
     we can make the select to the multiple select 
     for this we have to change the country property of type string to the array.
     and type is a string array.
     
     
     
