<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HangXeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('hang_xes')->delete();

        DB::table('hang_xes')->truncate();

        DB::table('hang_xes')->insert([
            [
                'ten_hang_xe' => 'TOYOTA',
                'logo' => 'data:image/png;base64,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',
                'mo_ta' => 'Hãng xe Nhật Bản thống lĩnh thị trường',
                'tinh_trang' => 1,
            ],
            [
                'ten_hang_xe' => 'FORD',
                'logo' => 'data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxMTExYUEBQWFxYYFhYZFBkZGhkZGxkWGBYXGBgYFxcaHykhGh4nHhYWIjIiJiosLy8vGCE3OjUuRSkuLzkBCgoKDg0OHBAQHDQnICYuLi4uNzAuLC44LjcuLi4uNy4uLjAuLi4uLi4uLi4uLi4uLi4uLi4uLi4uLi4uLi4wLv/AABEIAKgBLAMBIgACEQEDEQH/xAAcAAEAAgMBAQEAAAAAAAAAAAAABgcBBAUDAgj/xABKEAABAwIDBAYFBwgJBAMAAAABAAIDBBEFEiEGBzFBEyIyUWFxQnKBkaEUM2KCkqKxFhcjNENSssJEU1Rjg5OzwdIVJMPThKPR/8QAGQEBAAMBAQAAAAAAAAAAAAAAAAEDBAIF/8QAMhEAAgIAAwUIAQQBBQAAAAAAAAECAxEhMQQSE0FRFDJCUmFxkaGBIrHR8CMkM8Hh8f/aAAwDAQACEQMRAD8AvFERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBEWtVVscYvLIxg73Oa38SgNhFG6rbrDY+1Vwn1HdJ/Bdcqo3r4a3sySP9WJ4/jDVYqbHpF/Bw5xXMnKKtJt81IOxBUO8xG3+crRm31x+hSOPrShv4NK7WzWvwnPGh1LZRU2/fa/lRsHnOT/AOMLx/PZLypoh/iuP8qnslvT7Q40S6kVJ/nrn/s8P23IN9k39mi/zHD/AGU9kt6faI40S7EVMs33Sc6SM+U5H/jK2od9jfToyPVmDvxYFD2S3p+xPGgW4irGLfPS+nTzjy6N34uC6NPvaw53adKz1oyf4My4ez2LwslWwfMnqKL0u8DDZOFXGPXzR/6gC7dHisEovDNHJ6j2u/AqtwktUdqSejN5ERQSEREAREQBERAEREAREQBERAEREBhZXKxvH6akbmqpmRjkCes71WjrO9gVbY9vj4toIb8hJL38ssTTc+1w8lZXTOfdRxKyMdWW5dR/GNs6GmuJqiMOHFjTnf7WMuR7VVH/AEvHcU1lMjInf1h6CO3d0TRmcPEtPmutT7q6SnaH4lWho7mlkTfLM+5d7AFdwIR78s+izK+LJ91fJv4nvmgbcU0EkncXkRt8xbMfeAuA7ePi1VpRwgA6AwwulI83OzN+AXUGP7P0f6vB07xwcGGQ37xJOR91alfvlm4U1NGwcjI4v+60NA95V0avJD5/grlPzS+DW/J3aCq+dkmYD+/OI2+2OI/yr3pdzFQ45p6mNpPHK10h97sqjtfvJxOX+kdGO6NjG/Gxd8VHqvGKiW/TVE0l+IfI9w9xNlojXdyaXsitzh6stF26/Dof1qvItx68MQ+9c/FYODbNxduoEnlNI/8A0VVuG4TNObU0EkmuvRsc4A+JAsPau/Du7xR3ClcPN8TfgX3XMq/NZ/wSpeWJNBi+zUfZhD/OKZ3+osflvgcfzeH38RTwD4uddRB+7TFB/RifKWH/AJrSqdh8Rj7VJN9UB/8AASiqqes8fyRv2eX6J9+dLDm9igePqQt/AlfX536Ydmid74x+AVT1dBNF89FJH67HM/iAWsCu1stL/wDTl3TRcH544f7E77bP+KfngpzxonfaYf8AZVAi67HX0+yOPMt871qB3boXn6sLvxIXwdvsFk+cw8+2ngd+Drqo1hOx18sfkceRbxx7ZuTt07Wf4Dm/6SwKHZmbsyCPzknj+EmiqNLKOy4aSfyTx+qRbo3d4RN+rV5v3CaGT4Wv8VrVe5V/GGqY7uzxlv3muP4KqiFsUldLF8zLJH6j3M/hITgWrSfyieJB6osL8jMdptaeVzgOAinNvsS5R8E/LTHKT9ahc9o4mWA2t68WUfEqN0O3+JRWy1UjgOUgbJfzLwT8VJMP3x1TdJ4IZR9EujPv6w+CqlVZ4oqX0dKcOTaOvhm+mM2+U0zh9KJ4f7crstveVMcJ2/w+osGVDWuPoyXjN+4Z7A+wlQv8t8Gq/wBepOjceLzGHe6SLr/ALB3fYXWAnDqzK63YzCUDzjcRIPaVnnXX4ouP2i2M58mmW21wIuNR3r7VGP2NxnDutRSOewcoX3Hm6CTQnwAct3CN7s8LujxGnuR2iwGOQetE/Qn2tVb2ZvODTO+Ml3lgXMsrgbPbXUlYP+3laXWuY3dWQfUOpHiLjxXeWdxaeDLU09DKIigkIiIAsIo/tdtRBQQ55jdxuImDtPcOQ7gNLu5eZAMxi5PBENpLFnTxPEooI3SzyNjYOLnGw8AO8nkBqVUu0u9eaV3Q4ZG5uY5WyFuaR5/u49be258AuDDDX47UEk2jadTr0MLTyaPSeR7TzIHCZT1mG4CzJC3pqsjrajPqP2j+ETOHVAudNDxW2NUa3g1vS6dPczuxyzWS6nDwbdjVVBM+KTGIHV2Z2eYj6TnEtZ7b+QXUdtLg2GdWhiE8w0zt62vjO6+nqAjwVe7S7W1VcT8ok6l7tiZ1Yx3dX0j4uuVwlrVEp/7j/C0KHbGPdX5ZNcc3oV89xG8QMPKIda3jI67r+Lcqh1RK6RxfI5z3Hi5xLnHzcdSvJFohVCHdWBVKcpasIiKwrNrDqGWeVsMDC+R5s1o5nz4AAXJJ0ACuXZ3dpSUkfTYi5krmjM/ObQx9+h7fm7j3BfG5HAWsp3VbgDJK5zGH92JjspA7rva6/qt7lwt+GNSOnZSAkRMY2R4/fkcXWv3hoaLeLj3BebZZK23hxeC5m2EIwhvSOrjO9+GL9HQQZ2jQPf8Ao2fVjAzEeeVRWo3sYk7g6Fng2O/8ZKg7WkkAAkkgAAEkkmwAA1JJ5KVbTbIfIqSCWd5FRM92aLSzIw0m9+JcCWB2trvtyublRRDBNZsr4k5JtaI3Yt62JDi+J3rRj+UhdWi3z1I+epoX+o58f451WJKtfd7u6aGirxIAMAzxxP0AaBfpJr8ra5Dy7XcIurohHFxFcrJPJk92Q2odXsz/ACWWKMi4e/IWP8GahzvPLbTivCQ4PVSOjeKN8rXOa5rhGHhzSWuAuA46jiFANs94MtW/5JhYfkN25mA9JL4RgasZbnxI7he9f4pgs9MQ2phfGXC7czbAgcbHgbaeVws1ey45t7uOiLp3YcsS+Kvddhkmohcwn9yR49wJI+C49RuZpD2J6hvgTG4fwA/FVPhO0lXTW+T1ErAODc2Zn+W67fgphhm+GsZpPFFMO8XjcfMi7furt0bRHuyx/vqcq2qWqO2/cqz0axw84gfweFhm5VvpVjj5RAfzlbVLvopyP0tNO0/QLHj3uLfwW07fHQ20iqCe7JH/AOxVuW1LqdYUnlS7m6QG8k07/AdG0fwk/FNqdi8KoqKeR0dndG4Ruc95eZSD0YYCbXzW4DgDfS65mK759CKWmseTpXDT6jOP2gq2x3Hairk6SqkLyL5RwawHkxg0by8TYXurK6tom8ZvBHE51JfpRzERF6ZjCIiALIOoI4jge4+Cwigkk+C7fYhTWDJjIwehN+kHvJzj2OCmlNvDw+uaIsVpQ08A+3SNHiHACSM+V/NVKsKmezVyzwwfpkWRuki1cV3XxytE+D1DXtvdrS8EXH9XK3gR3O1vzC1MI3g1+HyCDEo3yNHKTSUDhdknCUed7/vKC4NjM9K/pKaV0budjo7we06OHmFaGD7b0eJsFNi0TGPOjH6hhcRa7X3zQu9tj362WayucVhNb0ftF8JRb/Tk/osTZ/aKnrI+kppA4DtN4OYe5zTqPwPK665VB7S7I1eESipo5HmIHSQdplz2Jm8HNOmtspPEDRWLu/28jr29HIBHUNF3M9F4HF8d+Xe3iPHisVlGC34PFft7l8LMXuyyZOERFnLjSxSvZBFJNKbMjaXOPgBfQczyA5lfn+JtRjeIdY5Q65PNsMDTwHedQPFzuXKf79MSLKaGAG3TSEu8WRAG323Rn2Lz3P0jKbD5qyQdsyOJ/uoARb7QlPtHcttP+Op2c3kjNZ+qe7yWbPjbbaaLCoG0GGgNly9Z2h6JrvTcfSldx18zyBpt7y4kuJJJJcSSSSdSSTqSe9e2IV0k0r5pTeSRxe8+JPAeA4AcgAtclehRSoR9eZltscn6GERFoKQiIgCIvSCFzzZjXOIFyGguNu+w5KCS/NzleyTDmMaRmifIx47iZHPafa14177rc2w2Cp8Qe2WRz45Gty5mZeswEkNcHAg2JNiLHVURs5tBPRSdLTPykiz2kXY9vIPbz52IsRc2OpU7O+ioy2FNFmt2s78t/Utf7y8uzZrY2OUDbC2DhuyJthGyGH4Wx1Q7VzASZpiCWj6AAAaTe3VGY3tqqZ212ldX1LpiC2MDJCw+jGDxPLMTqfYNbBTOOikxGFtdjVaIqXM7o4o7NBLSWmwN9btcALPeQeI4LtbFUWDVEj46OiMjYwC6aZmdlydAOlcXZjqbZRwPDRRCSqbnLGT+l+SZR30oxyRG90exvyiQVdQ28Mbv0LTwklae14tafe71SFs719qJZ5HUdK15iYbTOaHHpJB6GnotPHvd6us4252rjwyFgijY6R5yxRDqtDW9p1gNGi4FhzcPFVxPvhrz2Y6do9SQn3mS3wUw4ls+Ju4rlmJbkI7mJ093WF1EOH1dRTwO+WOd0UIc0NIZaM5m9JYWvI5x5HoxfgvPeRI+HDqWlrJOlqzKZXkm5a20nPmBnawE8cp7lrYHvdnbL/3wa+FwsejaGPYeTm69byJ8QdLGE7STRPqJX08ss0bjdsktzI7QXzE6kA3AJtoArIVTduM16/8AWJxKcVXhH2OYiL6Y0kgAEkkAAakk8ABzK9EyGFhdSr2eq4mdJLTTMZzc6NwAH0rjq+2y5ZPeuVNPQlprUIvWamewAvY5od2S5pAPPQkaryUpkYBEWA8d4Ug+gt7BMKkqp44IR15HWvyaOLnu8ALn2W5rRJV77pNkvksPyiZtppmiwI1ji4tZrwJ0cfqj0Vn2i7hQx58i2mvfl6HQfsbhlNT5pqeItiju+R7buIaNXOPNx7hzNgqDxaqZLNJJFG2KNzrsjaLBjBo0edgCTzJKsTfLtX0knyKF3UjIM5HpSDVrPJvE/St+6qwVOx1yUd+TzZ3fJY7q5GERFuMwREQFm7sdui0toq4h8L+pE9+uQu0ET79qM3sL8L24cOZvC2YfhlSyekLmROdmhcOMUo1MdzxFrkX4jMDexvBSFeVE44pgThJ1pmxvFzxM0NzG4nvcGtv65WC2HBmpLR5M11vfjg9VoSfYfaRtfTNmFg8HJK0ejIAL28CCHDwcpEqK3HYkWVckN+pLEXW+nGQW/ddJ8Feq8/aK+HY0tDVVPejiVJv7piW0kvJrpWHzeI3D4RuW/sEz5RgMlPH2+jq4rfTeZHtB9krPepVt3s/8to5IRbpNHwk8pWat15A6tJ7nFVNun2l+R1LqaouyOZ2U5tOjmaS0ZgeF+we4hvcVfDGdGC1i8SqX6bMXoyv2m+qKeb1dkHUs7p4m/oJnE3H7OVxu5h7gTct8yOQvA16dVinFSRjnBxeDCIitKwiI42QE23c7DmveZJiW07DZxGjpH8cjTyAFszvEAa6iy9pdp6PB4mw08TekIuyFlmgDh0kruQJB1N3ON/EiQbI4Y2mo4IWgdWJua3N7hme72uc4+1fnLaatfLVVEkpJc6aS9+Qa4ta3ya0BvsXlw/1Fr3u6uRtl/igsNWauJ1rppZJXhodI9z3Bos0FxubD2rWRbOHYfLPK2GBhfI82a0fEk8ABzJ0C9LKC9DJm2e2D4ZNVSx08ALnuJyj0WjTM937rRoSfLibBfovAcKgw2kyXDWRtL5ZDpmcBd73e7QcgAOS0tgdjY8Pi1s+d4HSycvBjL8Gj4nU8gIHvk2v6R3yGB3UY4GoI9J41bHfuadT9IAeiV5dk3tFihHu/3M2wiqobz1IPtdtA+uqXzuuGnqxtPoRtJyt89ST4uKkmwG7p9aBPUl0cF+oBo+W3Nt+yz6XE8uRXG2A2c+XVbInX6Jg6SYjTqNI6l+9xIHfbMRwV8bV42ygpHyho6jQ2JnAF56rG6cG99uABV20WuvCqvU4qgpYzkcivqsLwaMWYxjyOoxjQ+aS3MuccxH0nOA8VBtkqmlxPGJJJaZoa6EvaxxztMjDG3O5tgCSy+moBF9Tqq8xGvknlfNO8vkebucefgO4DgANAFNtydM52IF4HVZBISfFzmNA9t3H6pUPZ+HXKTeeAVm/NJLI3d6+ypNdB8ji69S1wyNAAzxluZ55NGV7bnh1Se9S/A8DocFgEtU9nTEWdKQS4m1zHCwAut4AXNrnwkW1WOQUUJqJwC5oLIhpnc51j0bDyvkBPg254Kgp6qqxasYHG8srsrB6ETOJyjk1oBceZtzKpr37YJN4RWvqWT3YSxSxbP0NhOIw1tOJYuvFIHDrNIuA5zHNc13iHBRDZLYylw1rJaotdO+VscbnDNkdI/LHHGLHrai7vW1ABUww2kho6dkbSGxxMAu48hxc495Op8Sq736GdgpJY8wjje9xcODJgYzE49x0fY+feqK05S3IvBMslkt5rNFlYlQxzxOimYHMcCHNPC3+x5g8l+YaHCZJ5+gpAZXFzg0jgWNNukceDW2sSfEd4CsTDdo8YxWPoIGRxxuGWWoa1zRl4Os4uIuRcWYL6+jxVjbI7KwYfH0cIu91ukkNszyO/uaLmzRoL95JN1dj2dNPV8v5OJRVrT5Ed2X3Z0lKzpKzJNKBdxf8ANMAFzlYdCBbtOvwvpwW5DtdhE8opA6N+c5Ggxno3OPBocW5TfgORvYXuoBvY2zdUSupIHEQROtIQfnZGnUHvY06W5kE8mqN7AUjZcRpWOzWEofoL6xAyNv4XYL+F12qZTg7Jt44YnHEUZKMUWZHuujbiTZmi1I1ok6Mm/wCmDjaMA65NA7X1eCkW8PagUFMXNI6aS7IRx63N5Hc0G/ico5qS1E7Y2OfI4Na1pc5x0AaBcknuAX5r222kdX1LpjcRjqQtPoxg6Ejk53aPnbkFVRGV81vaI7tkq4vDVnBe4kkuJJJJJJuSSbkkniSea+V6vgeGteWODH5gxxBDXFps7K7g6x424LyXsIwMIiLo5CIiAyrv3af9tg0k8mjT8ol1/daMnx6M277hVVsjs3LXzthjuGixlktpHHfU92Y6ho5nwBIsPe3j0cEDMNprDqs6UD0ImWyMJ73WaT4DXtBYdpe/JVr3ZqpW6nJka3L05diLCP2cMrj5WDPxkC/QSrfcxs46CndUSiz58pYDxETb5D9Yku8sqshYNqmp2vDlkaqItRzCq/eju+NRmqqNt5rfpYx+1AFszfpgaW9IDvGtoIqa7JVyxidygpLBlK7DbfRuj+Q4tZ0ZHRtkk1FuHRz34W4B54W14XWjtpuzlgvNQ3nhPWyjrSRtOulvnG+I17wdSp9tvu7hrbyxkQz83gdWTwkaOJ5Zhrw42sq8oMbxPBX9DOwuhv1WPJMbh/cSjs99ve0Fb65pveqyfNPn7GaSwynp1IEEVxuiwfGdWn5PVO49lj3O8R2JvMda3cohtDuyrqe7o2fKIx6UXat9KI9b7OZaobTFvCWT9SiVLWazRClhwuLL7e0glpBBBsQdCD3EHgvladSnQ/UuzGJNqKWGZp0fGwnwcBZzfMODh7FX+226x08z56J7GmQl0kb7tbnOrnMc0G1zqQRxJ15KH7vdvH4eTFK0vp3OuQO1G48XMvoQebdO8a3vc2GbZUE4BjqodfRc4McPNj7H4Lxpwtom3HQ9CMoWRwZVuHbnKtzv+4lhjbzLS6R3sbZo+KtHZXZGmoGEQNu93zkjtXvt3nkPoiwXrXbXUMQvJVQDwEjXO9jWkk+5V1tdvbzAx4a0i+hmeLW8Y2Hn4u9yY335cvoYV15nf3nbdikYaemcDUPGpGvRNI7R+mR2Ry4nkDRMbHPcGtDnvcbAC7nOcTwA4uJKzLIXOLnEuc4kucSSSTqSSdSSea7Gx2PmhqWT9GJAA5rmnjlcNSx3ou0Gvdcc16NVPBg93N/uZZ2b8s9C6N2OyZoICZrdPKQZBocgA6kdxxtdxJ73HiACtHffSSPoWOYCWxzNfLbkzJIzMfAF7fK9+SrqXeHUvro6t/ZjJDIQSGCN2j235uI9I8wNAAArvwHaWlrGB1PI11x1mGwe3vD2HUfgeV159kbK5qyWf90NUJQlFxR+ZKWnfI9scTXPe42a1ou4nwAV/wCwOzTMLpXyVLmtkcOkneSMrGsBszNzDQXEnmXHwXXra7D6BrnvMFPfjla1r3c9GMGZ58gVTe8Db59eeihBZTgg5T2pSDo59uAHEN9p1ta1zs2r9KWEeZWoxqzbxZy9utqX4hUGQ3ETLthYfRZ+8R+86wJ9g5KzdzmyvQQ/K5m2lmb+jB4sh4g+b7B3kG8NVW27/AY6qqaKhzGwx2fLmcG59erGLnXMePgDwuFcm3G2MVHSudC+N8rupC1pDrPI7TgD2WjXxsBzU7S8EqaxUscZyINvn2r6R/yGF3VYQ6cjm8WLGA/R0cfpZf3Su7s/vYpHwtFaXRygAPsxz2PIGrm5ASL8bHh48VSb3lxLnElxJLidSXE3JJ5kkk3Xwr+xwcFF8ivtEt5svSDedFPVQU1FGS18jWukeMoDeJDGA3uQCLm1u4qb45Uujp5pGC7mRSOaBzc1hIHvAX5ew2tdDLHNH2o5GPb3EscHWPgbWPmv0ts5tJBWxCSB4NwM7CRnYebXt5efA8rrHtOz8JpxWRfTbvpp6n5hhjc4hrQ5znEBoALnOJ4ADiSVe+63Yk0bDNUgfKJBbLoeij45Lji4mxdbTQDkSd/FK3CsLzSdHBHKQbMjYzpXX5NaNWg+Ngs7vttBiDZc4bHIyQ5YwbnoSBkdc9rXMCRz5C4XV187IfpWESK64wlm8yMb69p8rRQxHVwD6gjky/UZ7SMx8AP3lFN32wT61wmnBZStOp4GW3FsZ5N73+wa3ItDaXZXC+mdW1+UHq588hDHFrQ1t2X6xs0DLztwKrrb3eKalpp6IGOmtlc62V0rRplA9CP6PEjjYXCmiTcFCte7IsSUt6X4R57zNrop8tHRNYKaEjrNAs9zRlAj7mNBIuO15WvAURejXWq47qMk5ubxYRCVJMA2GrquxihLGH9pLdjLd4uMzvqgqZTjFYyeBEYuWhHFKdjthqmvIc0dHDfrSuGh8I2+mfgO/kptBsfhmFtEuJzNmktdsZHVPqwC5f3XdceS5GObwayvf8mwyJ8TCLAM1mc3hq5ukTfI6fvclllfKeVay6vQvjUo974O5ju0tJg8Jo8NDXVHpuNnZXkWL5XenJ3M5acBYHh7vdhpK2T5ZXhxiLs4D+1O4m+Z1/2f8XDgu9sTupZGRNiGWR/FsI1jaf7w/tD4dn1laQWKdsYJxg8W9X/BpjW5PGWnJH0AsoiyF4REQBa1bRxysMczGvY7tNcA4HzBWyiAqraXc/FJd9DJ0buPRyXdGfAO7TfbmUdbi+NYV1Z2vkhH9YDLHb6MzTmZ4AkeSvZfJC0R2l4YTW8vX+Sl0rHGORUTNvcLrwG4nS5HWtnt0gHqysAkb7vakm7SgqgX4ZWD1btmaPA2Ie32kqZ43u9w+puXQiN59OL9Gb95A6rj5gqD4nublYc9FUgkdkSAscP8Vl9fqhXQsh4ZOP2iuUJeJJkfxTdZiMVyyNkw743i9vFr8p9guoniGFzQaTwyx+uxzR7CRYqwBJtFQ8RNKwd+WpaR5i8gHuWxR74pmnJV0rHH0srnRn2xvDvxC0xtt9JezKnCHqirAs2VuHbDAanWqpOjceLjC2/24SXJ+T2z1R8zUiIngOmLD9mcFddpw70Wjng46SRUSK3X7oIJBemriRyu1knxY5q59TuZqR83UQu9YPZ+AcultdT5nLon0KzXyQOank26bEm8BC/1ZP8Ak0LRk3bYo3+jE+UkJ/nVivqfiRHCmuREQ0cgsqSP2DxIcaSX2ZD+DivF2xmID+hz/YJ/BTxYeZfJHDn0OCQgC7n5IYh/Y5/8t3/4sjY7ED/Q5/sFTxIdV8jcl0OEikTNhsSPCkl9oaPxK2I93WKO/orh5yQj8Xpxq/MvkcOfQiqWU4g3U4k7jHEz1pB/LddCm3OVh+cmgb5F7/5Qq3tNS8RKpn0K3AXpFI5pDmktcOBBII8iNQrXh3NNbrPW2H0Yw37znn8F9/kdgUH6xW5zzaZ2X+zEA5cPa6+WL/B1wZ88ipqiofIc0j3Pd3uJcbeZWaWlklOWJj5D3MaXn3NBKtb/AK7s7T/M04lI4fonPN/B1QQvKr3yNYMtJRtaPRzuA/8ArYP5lHGm+5F/nI64UfFIiuGbuMRn/YdG0+lK4M+7q/7qlVHukiib0mI1jWNHEMysA/xZP+IWmcf2grfmI5I2n+rjETSD3Sy6+5y9qTdPW1Dg+vqWtPi588lu67iAPeVVO2fjml7Zs7jCPhi37m6NocCw/wDVIunlHB4Gc37+ml0A9S/kuXUbd4riLjHQROjbwPRDM4eD53DKzzGXzU4wXdbh8Fi9jp3DnKbj7DbNPtBUzggYxoaxrWtHANAAHkBoFmd1aeKW8+rLVXJ6vBehUeBboZZHdLiUxuTdzGHM9x+nM7/YHzVoYLgkFIzo6aJsbeduLj3ucdXHxJXSRUWWzn3mWxrjHQyiIqzsIiIAiIgCIiAIiIAiIgC1K3D4ZRlmijkHc9rXD7wW2iAh9fu1w2T+jhh743PZ91py/BR+s3M0pv0VRMzwdkeB8Gn4qz0Vsb7I6SZW6oPVFK1G5edpvDUxOPLMx0Z97S5eP5CY5F81UONuAjqZB8HZQrvCyrO12c8H+CODHkUf0G0sXAzn60En4klPyh2jj7UU7v8A47XfwMV3rKdpx1ivg54PSTKQG3uON7VM761LKPwsn5zMXHGmj9tPOP51d6Jx4eRE8KXmZR/50cW/s8P+RP8A+xBvOxc8KeL2QT/81eFksnHh5EOHLqUh+cHG3dmm+zTTH/crH5U7QydmGZvlTW+L2K8ETjx5QQdT8zKPzbTSf1w9kEf/ABWfyPx+X5yeRvg+pcB7oyQruSydpfKKX4HBXNspOPc7WSG9RUwg9/6SU/eDV16PctCPnqmV3f0bGs/izq1kUParHzJVMOhCaDddhsdiYXSEc5JHn3taQ0+5SXDsDpqf9Xgij8WMa0+0gXK6SwqZWTlqztQitEZREXJ0EREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAf/2Q==',
                'mo_ta' => 'Hãng xe Mỹ với lịch sử lâu đời',
                'tinh_trang' => 1,
            ],
            [
                'ten_hang_xe' => 'MAZDA',
                'logo' => 'data:image/jpeg;base64,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',
                'mo_ta' => '3 lần đoạt giải Xe thế giới của năm',
                'tinh_trang' => 1,
            ],
        ]);
    }
}