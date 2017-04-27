{strip}


            {if $list}

	              		{if $_cfg.Review_InBlock == 1}
							{$l = reset($list)}
								<li>
									<p>
					                  {$l.oText|nl2br|truncate:100}
					                </p>
									<span>{$l.uLogin}</span>
								</li>





						{else}
							{foreach name=list from=$list key=id item=l}
								<li>
									<p>
					                  {$l.oText|nl2br|truncate:100}
					                </p>
									<span>{$l.uLogin}</span>
								</li>
							{/foreach}
						{/if}
				{/if}

				<li>

                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus reiciendis labore necessitatibus, modi iusto laboriosam!
                </p>



                <span>Username</span>

            </li>
            <li>

                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus reiciendis labore necessitatibus, modi iusto laboriosam!
                </p>



                <span>Username</span>

            </li>
            <li>

                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus reiciendis labore necessitatibus, modi iusto laboriosam!
                </p>



                <span>Username</span>

            </li>
            <li>

                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus reiciendis labore necessitatibus, modi iusto laboriosam!
                </p>



                <span>Username</span>

            </li>
            <li>

                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus reiciendis labore necessitatibus, modi iusto laboriosam!
                </p>



                <span>Username</span>

            </li>
            <li>

                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus reiciendis labore necessitatibus, modi iusto laboriosam!
                </p>



                <span>Username</span>

            </li>
            <li>

                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus reiciendis labore necessitatibus, modi iusto laboriosam!
                </p>



                <span>Username</span>

            </li>

{/strip}