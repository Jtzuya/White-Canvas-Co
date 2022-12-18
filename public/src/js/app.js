const accordions=document.querySelectorAll('.accordion');

for(var i=0;i<accordions.length;i++)
{
    accordions[i].addEventListener('click',(e) =>
    {
        e.preventDefault();

        if(e.currentTarget)
        {
            if(e.currentTarget.classList.contains('accord--query')||e.currentTarget.classList.contains('accord--response'))
            {
                let parent=e.currentTarget.parentElement
                let parentStatus=parent.getAttribute('aria-expanded')

                switch(true)
                {
                    case parentStatus==='true':
                        parent.setAttribute('aria-expanded','false')
                        break
                    default:
                        parent.setAttribute('aria-expanded','true')
                        break
                }
            } else
            {
                let buttonStatus=e.currentTarget.getAttribute('aria-expanded')
                switch(true)
                {
                    case buttonStatus==='true':
                        e.currentTarget.setAttribute('aria-expanded','false')
                        break
                    default:
                        e.currentTarget.setAttribute('aria-expanded','true')
                        break
                }
            }
        }
    })
}

//let endpoint = 'https://www.aliexpress.com/item/1005004059930728.html?spm=a2g0o.productlist.main.33.7b6b6064VNsRJm&algo_pvid=d269e94f-10b2-4231-a587-dbb8634eb660&algo_exp_id=d269e94f-10b2-4231-a587-dbb8634eb660-16&pdp_ext_f=%7B%22sku_id%22%3A%2212000027897723922%22%7D&pdp_npi=2%40dis%21PHP%21141.37%2141.03%21%21%21%21%21%4021227f0f16713395027872992d075e%2112000027897723922%21sea&curPageLogUid=qDaTeSVwaSkE'

// let prom = fetch(endpoint)
// let res = prom.body
// console.log(res)