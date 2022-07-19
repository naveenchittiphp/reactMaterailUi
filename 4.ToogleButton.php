Toogle buttons can be used to group related options.
This time we have access to the selected state of button group which can be utilized within the component.

Let say we have a editor in our app it contains options for bold italic 
To impleementthat we import two buttons 

mui button.tsx and 

Icons will be the contants for the three buttons 

<Stack  direction="row">
            <ToggleButtonGroup aria-label="text formating">
                <ToggleButton value="bold" aria-label="bold">
                    <FormatBoldIcon />
                </ToggleButton>
                <ToggleButton value="italic" aria-label="italic">
                    <FormatItalicIcon />
                </ToggleButton>
                <ToggleButton value="underlined" aria-label="underlined">
                    <FormatUnderlinedIcon />
                </ToggleButton>
            </ToggleButtonGroup>
        </Stack>

for each component we have to define the value and aria-label 
we can place icons inthem.

Add UseState:
------------

we can access the buttons by the usestate 

 const [formats,setFormats] = useState<string[]>([]);
   
   define a usstate varible formats and add a function "setFormats" to assign the value to the formats 
   
   formats is type of string array and add initial value [].
   
   
we have to add value and onChange event to the tootle button group.
             
  when we change any button in button group that changes we track by onChange event.
             
             function handelFormatChange (_event: React.MouseEvent<HTMLElement>,updateFormats:string[]){
        setFormats(updateFormats)
    }
             for this we willpass two aurgment 
             1)_event: React.MouseEvent<HTMLElement>
             2)updateFormats
             
             when we change the buttons we will get the list in "updateFormats"
             now set this value to the formates values.
             
             <Stack  direction="row">
            <ToggleButtonGroup aria-label="text formating" value={formats} onChange={handelFormatChange}>
                <ToggleButton value="bold" aria-label="bold">
                    <FormatBoldIcon />
                </ToggleButton>
                <ToggleButton value="italic" aria-label="italic">
                    <FormatItalicIcon />
                </ToggleButton>
                <ToggleButton value="underlined" aria-label="underlined">
                    <FormatUnderlinedIcon />
                </ToggleButton>
            </ToggleButtonGroup>
        </Stack>
             
             Size And Color : 
             ----------------
             We can define the color and size to the toggle buttons.
             
              <ToggleButtonGroup  size="small" color="success">
                          
               Orentation :
                ------------
                           <ToggleButtonGroup orientation="vertical">
                Restrict to single button:
                 -------------------------
                  we can restrict the user to click on single button by addng "exclusive"
                                       
                    for this we have to update the data storing to null insted of string[]
                                       
                                        const [formats,setFormats] = useState<string[] | null>(null);
    console.log(formats);
    function handelFormatChange (_event: React.MouseEvent<HTMLElement>,updateFormats:string[] | null){
        setFormats(updateFormats)
    }
