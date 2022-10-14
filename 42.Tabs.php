Create  a new component for the tab 

import * as React from 'react';
import Box from '@mui/material/Box';

export default function LatestNews() {
  
  return (<>
  <Box>

  </Box>
  </>);
}


Now place the box component in it 
we will place all our tab content inside it.

We can make the tab pannel by mui core and mui lab 
mui lab will provide more options 

for creating the mui lab we have to import componnets from mui lab 

import {TabContext,TabList,TabPannel} from '@mui/lab';


Now add the tableContext component and add box inside it 


<TabContext>
      <Box sx={{ borderBottom:1,borderColor:'divider'}}>
        <TabList aria-label='Latest News'>
          <Tab label="Tab One" value="1" />

          </Tab>
          <Tab label="Tab Two" value="2" />

          </Tab>
          <Tab label="Tab Three" value="3" />

          </Tab>
        </TabList> 
      </Box>
    </TabContext>

Now inside the tab list add the tab.
for the tab we have to define the label and value it doesnot have end tag 

Now for the content we hav to add tabPannel tag 

TablePannel:
-------------

We will store the content of the tab in the TablePannel 

  <TabPanel value="1">Tab 1</TabPanel>
  <TabPanel value="2">Tab 2</TabPanel>
  <TabPanel value="3">Tab 3</TabPanel>

Setting the tab :
-----------------
For selecting tab we have to define  a state varible 

const [activeTab,setActiveTab] = useState('1');
initially set the value as 1 

We have to define the active tab to the TabContext 

 <Box>
    <TabContext value={activeTab} >
.....
      
  Now we have to handle the change event 
  
 Define the new function for the handling the event 
  
      function changeTab(event, newValue) {
    setActiveTab(newValue);
  }

      
      So when ever we change the tab this function will be called 
      and the changed tab value is pass to the changeTab function 
      and avalible in the newValue parameter 
      so assign this the setActiveTab function.
      
      
      Change Highlite Color:
      -----------------------
      
      To change the hilght color we can change the text color and indicate the prop 
      
        <TabList aria-label='Latest News' onChange={changeTab} textColor="secondary" indicatorColor='secondary'>
          
          textColor -> with this we can define the text color 
          indicatorColor -> with this we can define the indicatorColor 
      
      
